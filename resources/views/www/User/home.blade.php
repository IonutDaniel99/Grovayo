<x-app-layout>
    <div class="main-section main-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="main-left-sidebar">
                        <div class="user-data full-width">
                            <div class="user-profile">
                                @if(Auth::user()->background_image_url == NULL)
                                <div class="username-dt dpbg dpbg-border" style="background-image:url('storage/www/auth_user/home/dpbg/bg-<?php echo rand(1, 12); ?>.jpg')">
                                    <div class=" usr-pic">
                                        <img class="h-100 w-100" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                @else
                                <div class="username-dt dpbg dpbg-border" style="background-image:url('{{Auth::user()->background_image_url}}')">
                                    <div class=" usr-pic">
                                        <img class="h-100 w-100" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                @endif
                                <div class="user-main-details">
                                    <h4>{{ Auth::user()->name }} </h4>
                                    @if($user_about['user_country'] != NULL)
                                    <span><i class="fas fa-map-marker-alt"></i> &nbsp;{{$user_about['user_country']}}</span>
                                    @else
                                    <span><i class="fas fa-map-marker-alt"></i> &nbsp;Not Specified</span>
                                    @endif
                                </div>
                                <ul class="followers-dts">
                                    <li>
                                        <div class="followers-dt-sm">
                                            <h4>Followers</h4>
                                            <span>{{$user_follow['followers_number']}}</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="followers-dt-sm">
                                            <h4>Following</h4>
                                            <span>{{$user_follow['following_number']}}</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="profile-link">
                                    <a href="{{ route('Settings_Personal_Info_Index') }}">
                                        <button class=" msg-btn1">View Profile</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="news-data-dash full-width">
                            <div id="recipeCarousel" class="carousel slide w-100 multi-item-carousel" data-ride="carousel">
                                <div class="categories-left-heading">
                                    <h3><i class="fas fa-globe-europe"></i> News</h3>
                                </div>
                                <div class="categories-items">
                                    <div class="carousel-inner w-100" role="listbox">
                                        <div class="carousel-item active">
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-globe-europe"></i>
                                                    <h6>&nbsp;&nbsp;World</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['world'][0]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['world'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-globe-europe"></i>
                                                    <h6>&nbsp;&nbsp;World</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['world'][1]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['world'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-globe-europe"></i>
                                                    <h6>&nbsp;&nbsp;World</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['world'][2]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['world'][2]['url']}}">Continue reading...</a>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-atom"></i>
                                                    <h6>&nbsp;&nbsp;Science</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['science'][0]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['science'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-atom"></i>
                                                    <h6>&nbsp;&nbsp;Science</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['science'][1]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['science'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-atom"></i>
                                                    <h6>&nbsp;&nbsp;Science</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['science'][2]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['science'][2]['url']}}">Continue reading...</a>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-microchip"></i>
                                                    <h6>&nbsp;&nbsp;Technology</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['technology'][0]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['technology'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-microchip"></i>
                                                    <h6>&nbsp;&nbsp;Technology</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['technology'][1]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['technology'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-microchip"></i>
                                                    <h6>&nbsp;&nbsp;Technology</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['technology'][2]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['technology'][2]['url']}}">Continue reading...</a>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-music"></i>
                                                    <h6>&nbsp;&nbsp;Music</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['music'][0]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['music'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-music"></i>
                                                    <h6>&nbsp;&nbsp;Music</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['music'][1]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['music'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-music"></i>
                                                    <h6>&nbsp;&nbsp;Music</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['music'][2]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['music'][2]['url']}}">Continue reading...</a>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-film"></i>
                                                    <h6>&nbsp;&nbsp;Movie</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['movies'][0]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['movies'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-film"></i>
                                                    <h6>&nbsp;&nbsp;Movie</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['movies'][1]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['movies'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-film"></i>
                                                    <h6>&nbsp;&nbsp;Movie</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['movies'][2]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['movies'][2]['url']}}">Continue reading...</a>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-dice"></i>
                                                    <h6>&nbsp;&nbsp;Games</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['games'][0]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['games'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-dice"></i>
                                                    <h6>&nbsp;&nbsp;Games</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['games'][1]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['games'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-dice"></i>
                                                    <h6>&nbsp;&nbsp;Games</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['games'][2]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['games'][2]['url']}}">Continue reading...</a>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-futbol"></i>
                                                    <h6>&nbsp;&nbsp;Sport</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['sport'][0]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['sport'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-futbol"></i>
                                                    <h6>&nbsp;&nbsp;Sport</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['sport'][1]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['sport'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-futbol"></i>
                                                    <h6>&nbsp;&nbsp;Sport</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['sport'][2]['title']}}
                                                </div>
                                                <a target="_blank" href="{{$news['sport'][2]['url']}}">Continue reading...</a>
                                            </div>
                                        </div>
                                    </div>
                                    <ol class="carousel-indicators mx-3" style="bottom: -18px !important;">
                                        <li data-target="#recipeCarousel" data-slide-to="0" class="active"></li>
                                        @for($i=1;$i<=6;$i++) <li data-target="#recipeCarousel" data-slide-to={{$i}}>
                                            </li>
                                            @endfor
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="center-section">
                        <div class="main-tabs">
                            <div class="tab-content">
                                <div class="tab-pane active">
                                    <div class="main-posts">
                                        @livewire('www.user.home.home-activity',['followed' => $followed], key(time()))

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-side-items">
                        <div class="w-weather">
                            <div class="weather-left">
                                <div class="weather-city">{{$weather['userLocationCity']}}</div>
                                <div class="week-text">{{$weather['dayName']}}</div>
                                <div class="week-text">{{$weather['day']}} {{$weather['month']}} {{$weather['year']}}</div>
                                <div class="week-text" style="font-size: 18px;"><i class="fas fa-tint"></i> {{$weather['humidity']}}%</div>
                                <ul>
                                    <li>
                                        <div class="up-down"><i class="fas fa-long-arrow-alt-down"></i> {{$weather['min_temp']}}°</div>
                                    </li>
                                    <li>
                                        <div class="up-down"><i class="fas fa-long-arrow-alt-up"></i> {{$weather['max_temp']}}°</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="weather-right">
                                <img class="weather-icon-center" src="http://openweathermap.org/img/wn/{{$weather["icon"]}}@2x.png" alt="" style="zoom:0%">
                                <span>{{$weather['temp']}}°</span>
                            </div>
                            <ul class="weekly-weather">
                                <li title={{ $weather['daily'][1]['weather'][0]["description"]}}>
                                    <div class="degree-text">{{ round($weather['daily'][1]["temp"]["max"])}}°</div>
                                    <div class="weather-icon"><i class="owf owf-<?php echo $weather['daily'][1]['weather'][0]["id"]; ?>"></i></i></div>
                                    <div class="day-text">{{date("D",$weather['daily'][1]["dt"])}}</div>
                                </li>
                                <li title={{ $weather['daily'][2]['weather'][0]["description"]}}>
                                    <div class="degree-text">{{ round($weather['daily'][2]["temp"]["max"])}}°</div>
                                    <div class="weather-icon"><i class="owf owf-<?php echo $weather['daily'][2]['weather'][0]["id"]; ?>"></i></i></div>
                                    <div class="day-text">{{date("D",$weather['daily'][2]["dt"])}}</div>
                                </li>
                                <li title={{ $weather['daily'][3]['weather'][0]["description"]}}>
                                    <div class="degree-text">{{ round($weather['daily'][3]["temp"]["max"])}}°</div>
                                    <div class="weather-icon"><i class="owf owf-<?php echo $weather['daily'][3]['weather'][0]["id"]; ?>"></i></i></div>
                                    <div class="day-text">{{date("D",$weather['daily'][3]["dt"])}}</div>
                                </li>
                                <li title={{ $weather['daily'][4]['weather'][0]["description"]}}>
                                    <div class="degree-text">{{ round($weather['daily'][4]["temp"]["max"])}}°</div>
                                    <div class="weather-icon"><i class="owf owf-<?php echo $weather['daily'][4]['weather'][0]["id"]; ?>"></i></i></div>
                                    <div class="day-text">{{date("D",$weather['daily'][4]["dt"])}}</div>
                                </li>
                                <li title={{ $weather['daily'][5]['weather'][0]["description"]}}>
                                    <div class="degree-text">{{ round($weather['daily'][5]["temp"]["max"])}}°</div>
                                    <div class="weather-icon"><i class="owf owf-<?php echo $weather['daily'][5]['weather'][0]["id"]; ?>"></i></i></div>
                                    <div class="day-text">{{date("D",$weather['daily'][5]["dt"])}}</div>
                                </li>
                                <li title={{ $weather['daily'][6]['weather'][0]["description"]}}>
                                    <div class="degree-text">{{ round($weather['daily'][6]["temp"]["max"])}}°</div>
                                    <div class="weather-icon"><i class="owf owf-<?php echo $weather['daily'][6]['weather'][0]["id"]; ?>"></i></i></div>
                                    <div class="day-text">{{date("D",$weather['daily'][6]["dt"])}}</div>
                                </li>
                            </ul>
                        </div>
                        <div class="user-data full-width">
                            <div class="categories-left-heading" style="border-bottom: 1px solid #e1e1e1;">
                                <h3>Peoples</h3>
                            </div>
                            <livewire:www.user.related-user />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>