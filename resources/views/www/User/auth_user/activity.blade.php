<x-app-layout>
    <main class="dashboard-mp">
        <livewire:www.user.auth-user.user-info />
        <div class="dash-tab-links">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <livewire:www.user.auth-user.tabs />
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="user-data full-width">
                            <div class="categories-left-heading" x-data="{tooltip:false}">
                                <div class="categories-left-heading-content" @mouseenter="tooltip = true" @mouseleave="tooltip = false">
                                    <h3>People Viewed Profile</h3>
                                    <i class="fas fa-info-circle info-button pt-1"></i>
                                </div>
                                <div class="relative" x-cloak x-show.transition.origin.top="tooltip">
                                    <div class="absolute z-10 w-auto p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-0 -translate-y-20 bg-orange-500 rounded-lg shadow-lg">
                                        You can see your last visitior even if your profile is set on private!
                                    </div>
                                </div>
                            </div>
                            @if($viewed_profile == 0)
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <h6>No one viewed your profile yet!</h6>
                                </div>
                            </div>
                            @else
                            @foreach($viewed_profile as $visitor)
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="/user/{{$visitor['visitor_username']}}">
                                        @if($visitor['visitor_image'] == null)
                                        <img src="https://ui-avatars.com/api/?name={{$visitor['visitor_username']}}&color=7F9CF5&background=EBF4FF" alt="{{$visitor['visitor_username']}}" style="margin-right:10px">
                                        @else
                                        <img src="/{{$visitor['visitor_image']}}" alt="{{$visitor['visitor_username']}}" style="margin-right:10px">
                                        @endif
                                    </a>
                                    <a href="/user/{{$visitor['visitor_username']}}">
                                        <h4 style="margin-top:1px;max-width: 170px;margin-left:0px!important">{{$visitor['visitor_name']}}</h4>
                                    </a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <div class="user-data full-width">
                            @IF($user_about['isSocialNetworksNull'] == 1)
                            <div class="categories-left-heading">
                                <h3>Social Accounts</h3>
                            </div>
                            <div class="categories-items">
                                @IF($user_about['social_webpage'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_webpage']}}"><i class="fas fa-globe" style="color:#51a5fb;"></i>&nbsp;&nbsp;{{$user_about['social_webpage']}}</a>
                                @ENDIF
                                @IF($user_about['social_facebook'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_facebook']}}"><i class="fab fa-facebook-square" style="color:#3b5998;"></i>&nbsp;&nbsp;{{$user_about['social_facebook']}}</a>
                                @ENDIF
                                @IF($user_about['social_twitter'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_twitter']}}"><i class="fab fa-twitter" style="color:#1da1f2;"></i>&nbsp;&nbsp;{{$user_about['social_twitter']}}</a>
                                @ENDIF
                                @IF($user_about['social_youtube'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_youtube']}}"><i class="fab fa-google-plus" style="color:#dd4b39;"></i>&nbsp;&nbsp;{{$user_about['social_youtube']}}</a>
                                @ENDIF
                                @IF($user_about['social_instagram'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_instagram']}}"><i class="fab fa-instagram" style="color:#405de6;"></i>&nbsp;&nbsp;{{$user_about['social_instagram']}}</a>
                                @ENDIF
                                @IF($user_about['social_linkedin'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_linkedin']}}"><i class="fab fa-pinterest" style="color:#bd081c;"></i>&nbsp;&nbsp;{{$user_about['social_linkedin']}}</a>
                                @ENDIF
                                @IF($user_about['social_other1'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_other1']}}"><i class="fab fa-linkedin" style="color:#0077b5;"></i>&nbsp;&nbsp;{{$user_about['social_other1']}}</a>
                                @ENDIF
                                @IF($user_about['social_other2'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_other2']}}"><i class="fab fa-youtube" style="color:#ff0000;"></i>&nbsp;&nbsp;{{$user_about['social_other2']}}</a>
                                @ENDIF
                            </div>
                            @ENDIF
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="main-posts">
                            <livewire:www.user.auth-user.posts />
                        </div>
                    </div>
                    <div class="col-lg-3 right-side-items">
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
                                <i class="owf owf-<?php echo $weather['icon'] ?>"></i>
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
                                    <div class="container">
                                        <div class="row py-2">
                                            <a id="left-news-button" class="col-6 text-center" href="#recipeCarousel" role="button" data-slide="prev">
                                                <i class="fas fa-chevron-left"></i>
                                            </a>
                                            <a id="right-news-button" class="col-6 text-center" href="#recipeCarousel" role="button" data-slide="next">
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
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