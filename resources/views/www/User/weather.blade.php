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
                                <div class="w-location">{{$Weather["time"]}} {{$Weather["timeFormat"]}}</div>
                            </div>
                            <div class="weather-time-right">
                                <div class="w-date">Updated : Today <a class="refresh" href=""><i class="fas fa-redo-alt"></i></a></div>
                                <div>
                                    <span class="pr-2" style="color: white;">Degree: </span>
                                    <form action="{{ route('weather.store') }}" method="post" class="d-inline">
                                        {{ csrf_field() }}
                                        <input name="degree" type="hidden" value="C">
                                        @IF($Weather['degreePreferences'] == 'C')
                                        <button type="submit" class="pr-2 underline" style="color:#2117b8">C</button>
                                        @ELSE
                                        <button type="submit" class="pr-2" style="color: white;">C</button>
                                        @ENDIF
                                    </form>
                                    <form action="{{ route('weather.store') }}" method="post" class="d-inline">
                                        {{ csrf_field() }}
                                        <input name="degree" type="hidden" value="F">
                                        @IF($Weather['degreePreferences'] == 'F')
                                        <button type="submit" class="px-1 underline" style="color:#2117b8">F</button>
                                        @ELSE
                                        <button type="submit" class="px-1 text-white">F</button>
                                        @ENDIF
                                    </form>
                                    <form action="{{ route('weather.store') }}" method="post" class="d-inline">
                                        {{ csrf_field() }}
                                        <input name="degree" type="hidden" value="K">
                                        @IF($Weather['degreePreferences'] == 'K')
                                        <button type="submit" class="pl-2 underline" style="color:#2117b8;">K</button>
                                        @ELSE
                                        <button type="submit" class="pl-2 text-white">K</button>
                                        @ENDIF
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="weather-center">
                            <div class="main-big-icon">
                                <img class="weather-icon-center" src="http://openweathermap.org/img/wn/{{$Weather["icon"]}}@2x.png" alt="http://openweathermap.org/">
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