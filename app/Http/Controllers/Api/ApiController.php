<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User_About;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    protected $ipinfo_key = "e0b00bfba21a07";
    protected $weather_key = "d932deb7f2601160f97de013c9de1b1e";
    protected $news_api = "2334c88bcf65427c8739252543fdea8f";

    public function callWeatherApi()
    {
        $ipinfo_data = json_decode(file_get_contents("https://ipinfo.io/?token=" . $this->ipinfo_key), true);
        $ipinfo_data['lat'] = substr($ipinfo_data['loc'], 0, 5);
        $ipinfo_data['long'] = substr($ipinfo_data['loc'], 8, -2);
        $Weather["degreePreferences"] = User_About::where('user_id', Auth::id())->value('user_weather_degree');
        if ($Weather["degreePreferences"] === "F") {
            $weather_data = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=" . $ipinfo_data['lat'] . "&lon=" . $ipinfo_data['long'] . "&units=imperial&exclude=minutely,hourly,alerts&appid=" . $this->weather_key), true);
            $Weather["wind_option"] = "MPH";
            $Weather["wind_speed"] = round($weather_data["current"]["wind_speed"], 1);
        } elseif ($Weather["degreePreferences"] === "K") {
            $weather_data = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=" . $ipinfo_data['lat'] . "&lon=" . $ipinfo_data['long'] . "&exclude=minutely,hourly,alerts&appid=" . $this->weather_key), true);
            $Weather["wind_option"] = "MPH";
            $Weather["wind_speed"] = round($weather_data["current"]["wind_speed"], 1);
        } elseif ($Weather["degreePreferences"] === "C") {
            $weather_data = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=" . $ipinfo_data['lat'] . "&lon=" . $ipinfo_data['long'] . "&units=metric&exclude=minutely,hourly,alerts&appid=" . $this->weather_key), true);
            $Weather["wind_option"] = "KM/H";
            $Weather["wind_speed"] = round($weather_data["current"]["wind_speed"] * 1.609, 1);
        }
        #region TimeAndDate
        $Weather["day"] = Carbon::now()->format('d');
        $Weather["month"] = Carbon::now()->format('M');
        $Weather["year"] = Carbon::now()->format('yy');
        $Weather["dayName"] = Carbon::now()->format('l');
        $Weather["time"] = Carbon::now()->format('H:i');
        $Weather["timeFormat"] = Carbon::now()->format('A');
        #endregion
        #region Localization
        $Weather["userLocationCity"] = $ipinfo_data["city"];
        $Weather['userLocationDistrict'] = $ipinfo_data['region'];
        $Weather['userLocationCountry'] = $ipinfo_data['country'];
        #endregion

        $Weather["temp"] = round($weather_data["current"]["temp"]);
        $Weather["min_temp"] = round($weather_data["daily"][0]["temp"]["min"]);
        $Weather["max_temp"] = round($weather_data["daily"][0]["temp"]["max"]);
        $Weather["main_temp_text"] = $weather_data["current"]["weather"][0]["main"];
        $Weather["icon"] = $weather_data["current"]["weather"][0]["icon"];

        if (isset($weather_data["current"]["wind_deg"])) {
            $Weather["weather_wind_degree"] = floor($weather_data["current"]["wind_deg"]);
            if ($Weather["weather_wind_degree"] >= 0 && $Weather["weather_wind_degree"] <= 22)
                $Weather["weather_wind_direction"] = "North-East";
            elseif ($Weather["weather_wind_degree"] >= 23 && $Weather["weather_wind_degree"] <= 67)
                $Weather["weather_wind_direction"] = "North-East";
            elseif ($Weather["weather_wind_degree"] >= 68 && $Weather["weather_wind_degree"] <= 112)
                $Weather["weather_wind_direction"] = "East";
            elseif ($Weather["weather_wind_degree"] >= 113 && $Weather["weather_wind_degree"] <= 157)
                $Weather["weather_wind_direction"] = "South-East";
            elseif ($Weather["weather_wind_degree"] >= 158 && $Weather["weather_wind_degree"] <= 202)
                $Weather["weather_wind_direction"] = "South";
            elseif ($Weather["weather_wind_degree"] >= 203 && $Weather["weather_wind_degree"] <= 247)
                $Weather["weather_wind_direction"] = "South-West";
            elseif ($Weather["weather_wind_degree"] >= 248 && $Weather["weather_wind_degree"] <= 292)
                $Weather["weather_wind_direction"] = "West";
            elseif ($Weather["weather_wind_degree"] >= 293 && $Weather["weather_wind_degree"] <= 337)
                $Weather["weather_wind_direction"] = "North-West";
            elseif ($Weather["weather_wind_degree"] > 338 && $Weather["weather_wind_degree"] <= 360)
                $Weather["weather_wind_direction"] = "North-East";
        } else {
            $Weather["weather_wind_degree"] = "Error";
            $Weather["weather_wind_direction"] = "TBD";
        }
        $Weather["clouds"] = $weather_data["current"]["clouds"];
        $Weather["humidity"] = $weather_data["current"]["humidity"];
        $Weather["pressure"] = $weather_data["current"]["pressure"];
        $Weather["sunrise"] = date("H:i", $weather_data["current"]["sunrise"]);
        $Weather["sunset"] = date("H:i", $weather_data["current"]["sunset"]);
        $Weather['time_zone'] = $ipinfo_data['timezone'];
        $Weather['daily'] = $weather_data['daily'];
        return $Weather;
    }

    public function callNewsApi()
    {
        $from = date('Y-m-d', strtotime('-1 days'));
        $lastCreated = strtotime(News::select("created_at")->pluck('created_at')->first());
        $lastDay = strtotime('24 hours');
        $news_array = ['world', 'science', 'technology', 'music', 'movies', 'games', 'sport'];
        if (News::all()->isEmpty()) {
            foreach ($news_array as $topic) {
                $data = json_decode(file_get_contents("http://newsapi.org/v2/everything?q=" . $topic . "&from=" . $from . "&sort&languange=en&apiKey=" . $this->news_api), true);
                foreach ($data["articles"] as $articles) {
                    $news = new News;
                    $news->topic = $topic;
                    $news->title = $articles['title'];
                    $news->url = $articles['url'];

                    $news->save();
                }
            }
        }
        if ($lastCreated < $lastDay) {
            foreach ($news_array as $topic) {
                $data = json_decode(file_get_contents("http://newsapi.org/v2/everything?q=" . $topic . "&from=" . $from . "&sort&languange=en&apiKey=" . $this->news_api), true);
                foreach ($data["articles"] as $articles) {
                    $news = new News;
                    $news->topic = $topic;
                    $news->title = $articles['title'];
                    $news->url = $articles['url'];

                    $news->save();
                }
            }
        }
        
    }

    public function returnUserLocation()
    {
        $ipinfo_data = json_decode(file_get_contents("https://ipinfo.io/?token=" . $this->ipinfo_key), true);
        return $this->replace_spec_char($ipinfo_data['city']);
    }
    function replace_spec_char($subject)
    {
        $char_map = array(
            "ъ" => "-", "ь" => "-", "Ъ" => "-", "Ь" => "-",
            "А" => "A", "Ă" => "A", "Ǎ" => "A", "Ą" => "A", "À" => "A", "Ã" => "A", "Á" => "A", "Æ" => "A", "Â" => "A", "Å" => "A", "Ǻ" => "A", "Ā" => "A", "א" => "A",
            "Б" => "B", "ב" => "B", "Þ" => "B",
            "Ĉ" => "C", "Ć" => "C", "Ç" => "C", "Ц" => "C", "צ" => "C", "Ċ" => "C", "Č" => "C", "©" => "C", "ץ" => "C",
            "Д" => "D", "Ď" => "D", "Đ" => "D", "ד" => "D", "Ð" => "D",
            "È" => "E", "Ę" => "E", "É" => "E", "Ë" => "E", "Ê" => "E", "Е" => "E", "Ē" => "E", "Ė" => "E", "Ě" => "E", "Ĕ" => "E", "Є" => "E", "Ə" => "E", "ע" => "E",
            "Ф" => "F", "Ƒ" => "F",
            "Ğ" => "G", "Ġ" => "G", "Ģ" => "G", "Ĝ" => "G", "Г" => "G", "ג" => "G", "Ґ" => "G",
            "ח" => "H", "Ħ" => "H", "Х" => "H", "Ĥ" => "H", "ה" => "H",
            "I" => "I", "Ï" => "I", "Î" => "I", "Í" => "I", "Ì" => "I", "Į" => "I", "Ĭ" => "I", "I" => "I", "И" => "I", "Ĩ" => "I", "Ǐ" => "I", "י" => "I", "Ї" => "I", "Ī" => "I", "І" => "I",
            "Й" => "J", "Ĵ" => "J",
            "ĸ" => "K", "כ" => "K", "Ķ" => "K", "К" => "K", "ך" => "K",
            "Ł" => "L", "Ŀ" => "L", "Л" => "L", "Ļ" => "L", "Ĺ" => "L", "Ľ" => "L", "ל" => "L",
            "מ" => "M", "М" => "M", "ם" => "M",
            "Ñ" => "N", "Ń" => "N", "Н" => "N", "Ņ" => "N", "ן" => "N", "Ŋ" => "N", "נ" => "N", "ŉ" => "N", "Ň" => "N",
            "Ø" => "O", "Ó" => "O", "Ò" => "O", "Ô" => "O", "Õ" => "O", "О" => "O", "Ő" => "O", "Ŏ" => "O", "Ō" => "O", "Ǿ" => "O", "Ǒ" => "O", "Ơ" => "O",
            "פ" => "P", "ף" => "P", "П" => "P",
            "ק" => "Q",
            "Ŕ" => "R", "Ř" => "R", "Ŗ" => "R", "ר" => "R", "Р" => "R", "®" => "R",
            "Ş" => "S", "Ś" => "S", "Ș" => "S", "Š" => "S", "С" => "S", "Ŝ" => "S", "ס" => "S",
            "Т" => "T", "Ț" => "T", "ט" => "T", "Ŧ" => "T", "ת" => "T", "Ť" => "T", "Ţ" => "T",
            "Ù" => "U", "Û" => "U", "Ú" => "U", "Ū" => "U", "У" => "U", "Ũ" => "U", "Ư" => "U", "Ǔ" => "U", "Ų" => "U", "Ŭ" => "U", "Ů" => "U", "Ű" => "U", "Ǖ" => "U", "Ǜ" => "U", "Ǚ" => "U", "Ǘ" => "U",
            "В" => "V", "ו" => "V",
            "Ý" => "Y", "Ы" => "Y", "Ŷ" => "Y", "Ÿ" => "Y",
            "Ź" => "Z", "Ž" => "Z", "Ż" => "Z", "З" => "Z", "ז" => "Z",
            "а" => "a", "ă" => "a", "ǎ" => "a", "ą" => "a", "à" => "a", "ã" => "a", "á" => "a", "æ" => "a", "â" => "a", "å" => "a", "ǻ" => "a", "ā" => "a", "א" => "a",
            "б" => "b", "ב" => "b", "þ" => "b",
            "ĉ" => "c", "ć" => "c", "ç" => "c", "ц" => "c", "צ" => "c", "ċ" => "c", "č" => "c", "©" => "c", "ץ" => "c",
            "Ч" => "ch", "ч" => "ch",
            "д" => "d", "ď" => "d", "đ" => "d", "ד" => "d", "ð" => "d",
            "è" => "e", "ę" => "e", "é" => "e", "ë" => "e", "ê" => "e", "е" => "e", "ē" => "e", "ė" => "e", "ě" => "e", "ĕ" => "e", "є" => "e", "ə" => "e", "ע" => "e",
            "ф" => "f", "ƒ" => "f",
            "ğ" => "g", "ġ" => "g", "ģ" => "g", "ĝ" => "g", "г" => "g", "ג" => "g", "ґ" => "g",
            "ח" => "h", "ħ" => "h", "х" => "h", "ĥ" => "h", "ה" => "h",
            "i" => "i", "ï" => "i", "î" => "i", "í" => "i", "ì" => "i", "į" => "i", "ĭ" => "i", "ı" => "i", "и" => "i", "ĩ" => "i", "ǐ" => "i", "י" => "i", "ї" => "i", "ī" => "i", "і" => "i",
            "й" => "j", "Й" => "j", "Ĵ" => "j", "ĵ" => "j",
            "ĸ" => "k", "כ" => "k", "ķ" => "k", "к" => "k", "ך" => "k",
            "ł" => "l", "ŀ" => "l", "л" => "l", "ļ" => "l", "ĺ" => "l", "ľ" => "l", "ל" => "l",
            "מ" => "m", "м" => "m", "ם" => "m",
            "ñ" => "n", "ń" => "n", "н" => "n", "ņ" => "n", "ן" => "n", "ŋ" => "n", "נ" => "n", "ŉ" => "n", "ň" => "n",
            "ø" => "o", "ó" => "o", "ò" => "o", "ô" => "o", "õ" => "o", "о" => "o", "ő" => "o", "ŏ" => "o", "ō" => "o", "ǿ" => "o", "ǒ" => "o", "ơ" => "o",
            "פ" => "p", "ף" => "p", "п" => "p",
            "ק" => "q",
            "ŕ" => "r", "ř" => "r", "ŗ" => "r", "ר" => "r", "р" => "r", "®" => "r",
            "ş" => "s", "ś" => "s", "ș" => "s", "š" => "s", "с" => "s", "ŝ" => "s", "ס" => "s",
            "т" => "t", "ț" => "t", "ט" => "t", "ŧ" => "t", "ת" => "t", "ť" => "t", "ţ" => "t",
            "ù" => "u", "û" => "u", "ú" => "u", "ū" => "u", "у" => "u", "ũ" => "u", "ư" => "u", "ǔ" => "u", "ų" => "u", "ŭ" => "u", "ů" => "u", "ű" => "u", "ǖ" => "u", "ǜ" => "u", "ǚ" => "u", "ǘ" => "u",
            "в" => "v", "ו" => "v",
            "ý" => "y", "ы" => "y", "ŷ" => "y", "ÿ" => "y",
            "ź" => "z", "ž" => "z", "ż" => "z", "з" => "z", "ז" => "z", "ſ" => "z",
            "™" => "tm",
            "@" => "at",
            "Ä" => "ae", "Ǽ" => "ae", "ä" => "ae", "æ" => "ae", "ǽ" => "ae",
            "ĳ" => "ij", "Ĳ" => "ij",
            "я" => "ja", "Я" => "ja",
            "Э" => "je", "э" => "je",
            "ё" => "jo", "Ё" => "jo",
            "ю" => "ju", "Ю" => "ju",
            "œ" => "oe", "Œ" => "oe", "ö" => "oe", "Ö" => "oe",
            "щ" => "sch", "Щ" => "sch",
            "ш" => "sh", "Ш" => "sh",
            "ß" => "ss",
            "Ü" => "ue",
            "Ж" => "zh", "ж" => "zh",
        );
        return strtr($subject, $char_map);
    }
}
