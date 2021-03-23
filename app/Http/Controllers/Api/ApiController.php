<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User_About;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


/**
 * Api Controller Class contain function which return an API call with data.
 */
class ApiController extends Controller
{

    protected $ipinfo_key = "e0b00bfba21a07";
    protected $weather_key = "d932deb7f2601160f97de013c9de1b1e";
    protected $news_api = "2334c88bcf65427c8739252543fdea8f";
    /**
     * Return API call from api.openweathermap.org. It requires two api keys.
     * First from ipinfo.io to locate the user city and second for weather to retrieve data for city
     * @return json $Weather city data
     */
    public function callWeatherApiHome()
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
        $Weather["year"] = Carbon::now()->format('Y');
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

    public function callWeatherApiUser($city)
    {
        if ($city == NULL) {
            return $this->callWeatherApiHome();
        };
        $weather_geolocation = json_decode(file_get_contents("http://api.openweathermap.org/geo/1.0/direct?q=" . $city . "&limit=2&appid=" . $this->weather_key), true);
        $weather_geolocation['lat'] = substr($weather_geolocation[0]['lat'], 0, 5);
        $weather_geolocation['long'] = substr($weather_geolocation[0]['lon'], 0, -2);
        $Weather["degreePreferences"] = User_About::where('user_id', Auth::id())->value('user_weather_degree');
        if ($Weather["degreePreferences"] === "F") {
            $weather_data = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=" . $weather_geolocation['lat'] . "&lon=" . $weather_geolocation['long'] . "&units=imperial&exclude=minutely,hourly,alerts&appid=" . $this->weather_key), true);
            $Weather["wind_option"] = "MPH";
            $Weather["wind_speed"] = round($weather_data["current"]["wind_speed"], 1);
        } elseif ($Weather["degreePreferences"] === "K") {
            $weather_data = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=" . $weather_geolocation['lat'] . "&lon=" . $weather_geolocation['long'] . "&exclude=minutely,hourly,alerts&appid=" . $this->weather_key), true);
            $Weather["wind_option"] = "MPH";
            $Weather["wind_speed"] = round($weather_data["current"]["wind_speed"], 1);
        } elseif ($Weather["degreePreferences"] === "C") {
            $weather_data = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/onecall?lat=" . $weather_geolocation['lat'] . "&lon=" . $weather_geolocation['long'] . "&units=metric&exclude=minutely,hourly,alerts&appid=" . $this->weather_key), true);
            $Weather["wind_option"] = "KM/H";
            $Weather["wind_speed"] = round($weather_data["current"]["wind_speed"] * 1.609, 1);
        }
        #region TimeAndDate
        $Weather["day"] = Carbon::now()->format('d');
        $Weather["month"] = Carbon::now()->format('M');
        $Weather["year"] = Carbon::now()->format('Y');
        $Weather["dayName"] = Carbon::now()->format('l');
        #endregion
        #region Localization
        $Weather["userLocationCity"] = $city;
        #endregion

        $Weather["temp"] = round($weather_data["current"]["temp"]);
        $Weather["min_temp"] = round($weather_data["daily"][0]["temp"]["min"]);
        $Weather["max_temp"] = round($weather_data["daily"][0]["temp"]["max"]);
        $Weather["main_temp_text"] = $weather_data["current"]["weather"][0]["main"];
        $Weather["icon"] = $weather_data["current"]["weather"][0]["icon"];

        $Weather["humidity"] = $weather_data["current"]["humidity"];
        $Weather['daily'] = $weather_data['daily'];
        return $Weather;
    }
    /**
     * Return api call from newsapi.org with news from 'world', 'science', 'technology', 'music', 'movies', 'games', 'sport'.
     * It require one api key.
     * @return json news list
     */
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
    /**
     * Return user location from city ipinfo.io.
     * @return string city
     */
    public function returnUserLocation()
    {
        $ipinfo_data = json_decode(file_get_contents("https://ipinfo.io/?token=" . $this->ipinfo_key), true);
        return replace_spec_char($ipinfo_data['city']);
    }
}
