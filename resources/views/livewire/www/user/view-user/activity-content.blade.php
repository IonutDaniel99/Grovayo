<div>
    @if($is_private == 0)
    <div class="dash-tab-links">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <livewire:www.user.view-user.tabs :username='$username' />
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="user-data full-width">
                        @IF($user_model['isSocialNetworksNull'] == 1)
                        <div class="about-left-heading">
                            <h3>Social Accounts</h3>
                        </div>
                        <div class="categories-items">
                            @IF($user_model['about_model']['social_webpage'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_webpage']}}"><i class="fas fa-globe" style="color:#51a5fb;"></i><span class="pl-3">{{$user_model['about_model']['social_webpage']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_facebook'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_facebook']}}"><i class="fab fa-facebook-square" style="color:#3b5998;"></i><span class="pl-3">{{$user_model['about_model']['social_facebook']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_twitter'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_twitter']}}"><i class="fab fa-twitter" style="color:#1da1f2;"></i><span class="pl-3">{{$user_model['about_model']['social_twitter']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_youtube'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_youtube']}}"><i class="fab fa-google-plus" style="color:#dd4b39;"></i><span class="pl-3">{{$user_model['about_model']['social_youtube']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_instagram'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_instagram']}}"><i class="fab fa-instagram" style="color:#405de6;"></i><span class="pl-3">{{$user_model['about_model']['social_instagram']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_linkedin'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_linkedin']}}"><i class="fab fa-pinterest" style="color:#bd081c;"></i><span class="pl-3">{{$user_model['about_model']['social_linkedin']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_other1'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_other1']}}"><i class="fab fa-linkedin" style="color:#0077b5;"></i><span class="pl-3">{{$user_model['about_model']['social_other1']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_other2'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_other2']}}"><i class="fab fa-youtube" style="color:#ff0000;"></i><span class="pl-3">{{$user_model['about_model']['social_other2']}}</span></a>
                            @ENDIF
                        </div>
                        @ELSE
                        <div class="about-left-heading">
                            <h3>Social Accounts</h3>
                        </div>
                        <div class="categories-items">
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <h6>This user has social media links hidden.</h6>
                                </div>
                            </div>
                        </div>
                        @ENDIF
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="main-posts">
                        <livewire:www.user.view-user.posts.view-user-activity :username="$this->username" />
                    </div>
                </div>
                <div class="col-lg-3">
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
    @else
    <div class="dash-tab-links">
        <div class="container text-center">
            <h1>This account is Private</h1>
            <h4>Follow to see his posts, friends, images and videos!</h4>
        </div>
    </div>
    @endif
</div>