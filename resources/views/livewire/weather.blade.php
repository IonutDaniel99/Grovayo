<x-app-layout>
    <main class="weather-mp">
        <div class="main-weather-section bg-weather">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="weather-date-time">
                            <div class="weather-date-left">
                                <div class="w-date">{{$Weather["day"]}} {{$Weather["month"]}} {{$Weather["year"]}}, {{$Weather["dayName"]}}</div>
                                <div class="w-location">{{$Weather["userLocationCity"] }},{{$Weather["userLocationDistrict"] }},{{$Weather["userLocationCountry"] }}</div>
                            </div>
                            <div class="weather-time-right">
                                <div class="w-date">Updated : Today <a class="refresh" href=""><i class="fas fa-redo-alt"></i></a></div>
                                <div class="w-location">{{$Weather["time"]}} {{$Weather["timeFormat"]}}</div>
                            </div>
                        </div>
                        <div class="weather-center">
                            <div class="main-big-icon">
                                <img class="weather-icon-center" src="http://openweathermap.org/img/wn/{{$Weather["icon"]}}@2x.png" alt="">
                            </div>
                            <ul class="weather-list-1">
                                <li>
                                    <div class="low">Low<i class="mx-2 fas fa-long-arrow-alt-down"></i>{{$Weather["min_temp"]}}°</div>
                                </li>
                                <li>

                                    <div class="digree"> {{$Weather["temp"]}}° {{$Weather["degreePreferences"]}}
                                    </div>
                                </li>
                                <li>
                                    <div class="low">High<i class="mx-2 fas fa-long-arrow-alt-up"></i>{{$Weather["max_temp"]}}°</div>
                                </li>
                            </ul>
                            <div class="suny-day">
                                {{$Weather["main_temp_text"]}}
                            </div>
                            <div class="weather-list-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="weather-main-widget">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="user-data full-width">
                            <div class="widget-inputs widget-lft">
                                <form action="{{ route('weather.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5">
                                            <div class="form-group">
                                                <label>Country (Time Zone)*</label>
                                                <div class="select-bg">
                                                    <select class="nice-select wide" name="timezone">
                                                        <option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                                                        <option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="US/Hawaii">(GMT-10:00) Hawaii</option>
                                                        <option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="US/Alaska">(GMT-09:00) Alaska</option>
                                                        <option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="US/Pacific">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                        <option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="America/Tijuana">(GMT-08:00) Tijuana, Baja California</option>
                                                        <option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="US/Arizona">(GMT-07:00) Arizona</option>
                                                        <option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="US/Mountain">(GMT-07:00) Mountain Time (US & Canada)</option>
                                                        <option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="US/Central">(GMT-06:00) Central Time (US & Canada)</option>
                                                        <option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="US/Eastern">(GMT-05:00) Eastern Time (US & Canada), Indiana (East)</option>
                                                        <option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
                                                        <option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="Greenland">(GMT-03:00) Greenland, Brasilia</option>
                                                        <option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="Atlantic/Stanley">(GMT-02:00) Mid-Atlantic</option>
                                                        <option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                                        <option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="Europe/London">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                                        <option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                                        <option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                                        <option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                        <option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="Europe/Sarajevo">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                                        <option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="Europe/Bucharest">(GMT+02:00) Athens, Bucharest, Istanbul, Cairo, Beirut</option>
                                                        <option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="Europe/Helsinki">(GMT+02:00) Helsinki, Jerusalem, Sofia, Minks, Vilnius</option>
                                                        <option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Baghdad , Nairobi</option>
                                                        <option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="Asia/Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
                                                        <option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                        <option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="Asia/Tashkent">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                                                        <option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="Asia/Kolkata">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                        <option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="Asia/Kathmandu">(GMT+05:45) Kathmandu</option>
                                                        <option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                                                        <option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="Asia/Yangon">(GMT+06:30) Yangon (Rangoon)</option>
                                                        <option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                                        <option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                        <option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                        <option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                                        <option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="Australia/Melbourne">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                                                        <option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="Asia/Magadan">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                                                        <option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="Pacific/Fiji">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5">
                                            <div class="form-group">
                                                <label>Tempecture Unit*</label>
                                                <div class="select-bg">
                                                    <select class="nice-select wide" name="degree">
                                                        <option value="F">F° (Farenheit)</option>
                                                        <option value="C">C° (Celsius)</option>
                                                        <option value="K">K° (Kelvin)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <button type="Submit" class="create-topic widget-btn-save">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="user-data full-width">
                            <div class="widget-inputs wt-m">
                                <div class="owl-carousel widget-owl owl-theme owl-loaded owl-drag">
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="width: 3270px;">
                                            <div class="owl-item active" style="width: 145.714px; margin-right: 10px;">
                                                <div class="item">
                                                    <div class="widget-day">Wind Speed</div>
                                                    <div class="widget-icon"><i class="fas fa-wind"></i></div>
                                                    <div class="widget-cf">{{$Weather["wind_speed"]}} {{$Weather["wind_option"]}} / {{$Weather["weather_wind_direction"]}}</div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 145.714px; margin-right: 10px;">
                                                <div class="item">
                                                    <div class="widget-day">Clouds</div>
                                                    <div class="widget-icon"><i class="fas fa-smog"></i></div>
                                                    <div class="widget-cf">{{$Weather["clouds"]}} %</div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 145.714px; margin-right: 10px;">
                                                <div class="item">
                                                    <div class="widget-day">Humidity</div>
                                                    <div class="widget-icon"><i class="fas fa-tint"></i></div>
                                                    <div class="widget-cf">{{$Weather["humidity"]}} %</div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 145.714px; margin-right: 10px;">
                                                <div class="item">
                                                    <div class="widget-day">Pressure</div>
                                                    <div class="widget-icon"><i class="fas fa-tachometer-alt"></i></div>
                                                    <div class="widget-cf">{{$Weather["pressure"]}} mb</div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="border-left:2px solid gray;  width: 145.714px; margin-right: 10px;">
                                                <div class="item">
                                                    <div class="widget-day">Sunrise</div>
                                                    <div class="widget-icon"><i class="fas fa-sun"></i></div>
                                                    <div class="widget-cf">{{$Weather["sunrise"]}}</div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 145.714px; margin-right: 10px;">
                                                <div class="item">
                                                    <div class="widget-day">Sunset</div>
                                                    <div class="widget-icon"><i class="fas fa-moon"></i></div>
                                                    <div class="widget-cf">{{$Weather["sunset"]}}</div>
                                                </div>
                                            </div>
                                            <div class="owl-item active" style="width: 145.714px; margin-right: 10px;">
                                                <div class="item">
                                                    <div class="widget-day">TimeZone</div>
                                                    <div class="widget-icon"><i class="fas fa-globe-europe"></i></div>
                                                    <div class="widget-cf">{{$Weather["time_zone"]}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>