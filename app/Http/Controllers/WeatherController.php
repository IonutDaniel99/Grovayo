<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WeatherController extends Controller
{

    protected $ipinfo_key = "e0b00bfba21a07";
    protected $weather_key = "d932deb7f2601160f97de013c9de1b1e";


    public function __construct()
    {
        $this->ipinfo_data = json_decode(file_get_contents("https://ipinfo.io/?token=" . $this->ipinfo_key), true);
        $this->weather_data = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=" . $this->ipinfo_data["city"] . "&units=imperial&appid=" . $this->weather_key), true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        #region TimeAndDate
        $Weather["time_zone"] =
            DB::table('users')->where('id', Auth::id())->value("time_zone");;
        $Weather["day"] = Carbon::now()->timezone($Weather["time_zone"])->format('d');
        $Weather["month"] = Carbon::now()->timezone($Weather["time_zone"])->format('M');
        $Weather["year"] = Carbon::now()->timezone($Weather["time_zone"])->format('yy');
        $Weather["dayName"] = Carbon::now()->timezone($Weather["time_zone"])->format('l');
        $Weather["time"] = Carbon::now()->timezone($Weather["time_zone"])->format('H:i');
        $Weather["timeFormat"] = Carbon::now()->timezone($Weather["time_zone"])->format('A');
        #endregion

        #region Localization
        $Weather["userLocationCity"] = $this->ipinfo_data["city"];
        $Weather['userLocationDistrict'] = $this->ipinfo_data['region'];
        $Weather['userLocationCountry'] = $this->ipinfo_data['country'];
        #endregion

        #region PureWeather
        $weather_data = $this->weather_data;
        $Weather["degreePreferences"] = DB::table('users')->where('id', Auth::id())->value('user_weather_degree');
        if ($Weather["degreePreferences"] === "F") {
            $Weather["temp"] = $weather_data["main"]["temp"];
            $Weather["min_temp"] = $weather_data["main"]["temp_min"];
            $Weather["max_temp"] = $weather_data["main"]["temp_max"];
            $Weather["wind_speed"] = round($weather_data["wind"]["speed"], 1);
            $Weather["wind_option"] = "MPH";
        } elseif ($Weather["degreePreferences"] === "K") {
            $Weather["temp"] = ($weather_data["main"]["temp"] - 32) * 5 / 9 + 273.15;
            $Weather["min_temp"] = ($weather_data["main"]["temp_min"] - 32) * 5 / 9 + 273.15;
            $Weather["max_temp"] = ($weather_data["main"]["temp_max"] - 32) * 5 / 9 + 273.15;
            $Weather["wind_speed"] = round($weather_data["wind"]["speed"], 1);
            $Weather["wind_option"] = "MPH";
        } elseif ($Weather["degreePreferences"] === "C") {
            $Weather["temp"] = ($weather_data["main"]["temp"] - 32) * 5 / 9;
            $Weather["min_temp"] = ($weather_data["main"]["temp_min"] - 32) * 5 / 9;
            $Weather["max_temp"] = ($weather_data["main"]["temp_max"] - 32) * 5 / 9;
            $Weather["wind_speed"] = round($weather_data["wind"]["speed"] * 1.609, 1);
            $Weather["wind_option"] = "KM/H";
        }
        $Weather["temp"] = round($Weather["temp"]);
        $Weather["min_temp"] = round($Weather["min_temp"]);
        $Weather["max_temp"] = round($Weather["max_temp"]);
        $Weather["main_temp_text"] = $weather_data["weather"][0]["main"];
        $Weather["icon"] = $weather_data["weather"][0]["icon"];

        if (isset($this->weather_data["wind"]["deg"])) {
            $Weather["weather_wind_degree"] = floor($this->weather_data["wind"]["deg"]);
            if ($Weather["weather_wind_degree"] >= 0 && $Weather["weather_wind_degree"] <= 22)
                $Weather["weather_wind_direction"] = "North-East";
            elseif ($Weather["weather_wind_degree"] >= 23 && $Weather["weather_wind_degree"] <= 67)
                $Weather["weather_wind_direction"] = "North-East";
            elseif ($Weather["weather_wind_degree"] >= 68 && $Weather["weather_wind_degree"] <= 112)
                $Weather["weather_wind_direction"] = "East";
            elseif ($Weather["weather_wind_degree"] >= 113 && $Weather["weather_wind_degree"] <= 157)
                $Weather["weather_wind_direction"] = "Souts-East";
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
        $Weather["clouds"] = $weather_data["clouds"]["all"];
        $Weather["humidity"] = $weather_data["main"]["humidity"];
        $Weather["pressure"] = $weather_data["main"]["pressure"];
        $Weather["sunrise"] = date("H:i", $weather_data["sys"]["sunrise"]);
        $Weather["sunset"] = date("H:i", $weather_data["sys"]["sunset"]);
        //return $weather_data;
        #endregion
    
        return view('livewire.weather', compact('Weather'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r_degree = $request->degree;
        $r_timezone = $request->timezone;

        DB::table('users')->where('id', Auth::id())->update(['user_weather_degree' => $r_degree, 'time_zone' => $r_timezone]);

        return redirect()->route('Weather');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
