<x-app-layout>
    <main class="dashboard-mp">
        @livewire('nav.profile.user-info')
        <div class="dash-tab-links">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        @livewire('nav.profile.tabs')
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="user-data full-width">
                            <div class="categories-left-heading">
                                <h3>People Viewed Profile</h3>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="#"><img src="images/homepage/left-side/left-img-1.jpg" alt=""></a>
                                    <a href="#">
                                        <h4>Johnson</h4>
                                    </a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="#"><img src="images/homepage/left-side/left-img-2.jpg" alt=""></a>
                                    <a href="#">
                                        <h4>Jassica William</h4>
                                    </a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="#"><img src="images/homepage/left-side/left-img-3.jpg" alt=""></a>
                                    <a href="#">
                                        <h4>Rock</h4>
                                    </a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="#"><img src="images/homepage/left-side/left-img-4.jpg" alt=""></a>
                                    <a href="#">
                                        <h4>Davil Smith</h4>
                                    </a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="#"><img src="images/homepage/left-side/left-img-5.jpg" alt=""></a>
                                    <a href="#">
                                        <h4>Ricky Doe</h4>
                                    </a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                        </div>
                        <div class="user-data full-width">
                            @IF($user_about['isSocialNetworksNull'] == 1)
                            <div class="categories-left-heading">
                                <h3>Social Accounts</h3>
                            </div>
                            <div class="categories-items">
                                @IF($user_about['social_webpage'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_webpage']}}"><i class="fas fa-globe" style="color:#51a5fb;"></i>{{$user_about['social_webpage']}}</a>
                                @ENDIF
                                @IF($user_about['social_facebook'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_facebook']}}"><i class="fab fa-facebook-square" style="color:#3b5998;"></i>{{$user_about['social_facebook']}}</a>
                                @ENDIF
                                @IF($user_about['social_twitter'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_twitter']}}"><i class="fab fa-twitter" style="color:#1da1f2;"></i>{{$user_about['social_twitter']}}</a>
                                @ENDIF
                                @IF($user_about['social_youtube'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_youtube']}}"><i class="fab fa-google-plus" style="color:#dd4b39;"></i>{{$user_about['social_youtube']}}</a>
                                @ENDIF
                                @IF($user_about['social_instagram'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_instagram']}}"><i class="fab fa-instagram" style="color:#405de6;"></i>{{$user_about['social_instagram']}}</a>
                                @ENDIF
                                @IF($user_about['social_linkedin'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_linkedin']}}"><i class="fab fa-pinterest" style="color:#bd081c;"></i>{{$user_about['social_linkedin']}}</a>
                                @ENDIF
                                @IF($user_about['social_other1'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_other1']}}"><i class="fab fa-linkedin" style="color:#0077b5;"></i>{{$user_about['social_other1']}}</a>
                                @ENDIF
                                @IF($user_about['social_other2'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_other2']}}"><i class="fab fa-youtube" style="color:#ff0000;"></i>{{$user_about['social_other2']}}</a>
                                @ENDIF
                            </div>
                            @ENDIF
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="main-posts">
                            <div class="add-activity">
                                <div class="activity-group">
                                    <div class="maine-activity-img">
                                        <img src="images/event-view/user-1.jpg" alt="">
                                    </div>
                                    <textarea class="add-activity-des" placeholder="What is new, John Doe?"></textarea>
                                </div>
                                <div class="activity-button">
                                    <button class="act-btn-post" type="submit">Upload Activity</button>
                                </div>
                            </div>
                            <div class="activity-posts">
                                <div class="activity-group1">
                                    <div class="main-user-dts1">
                                        <img src="images/event-view/user-1.jpg" alt="">
                                        <div class="user-text3">
                                            <h4>John Doe</h4>
                                            <span>posted an update a 5 min ago</span>
                                        </div>
                                    </div>
                                    <div class="dot-option dropdown">
                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                        <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                            <a class="post-link-item" href="#">Hide</a>
                                            <a class="post-link-item" href="#">Edit</a>
                                            <a class="post-link-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity-descp">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.</p>
                                </div>
                                <div class="like-comment-view">
                                    <div class="left-comments">
                                        <a href="#" class="like-item" title="Like">
                                            <i class="fas fa-heart"></i>
                                            <span><ins>Like</ins> 251</span>
                                        </a>
                                        <a href="#" class="like-item lc-left" title="Comment">
                                            <i class="fas fa-comment-alt"></i>
                                            <span><ins>Comment</ins> 1</span>
                                        </a>
                                    </div>
                                    <div class="right-comments">
                                        <a href="#" class="like-item" title="Share">
                                            <i class="fas fa-eye"></i>
                                            <span><ins>View</ins> 351</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="activity-reply">
                                    <div class="activity-group1">
                                        <div class="main-user-dts1">
                                            <img src="images/event-view/user-4.jpg" alt="">
                                            <div class="user-text3">
                                                <h4>Rock William</h4>
                                                <span>posted an update a 3 min ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity-descp">
                                        <p>Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus.</p>
                                        <ul>
                                            <li><a href="#">Reply</a></li>
                                            <li><a href="#">Report</a></li>
                                            <li><a href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                    <div class="activity-post-reply">
                                        <div class="areply-dp1">
                                            <img src="images/event-view/user-1.jpg" alt="">
                                        </div>
                                        <form>
                                            <input class="areply-post" type="text" placeholder="Write a reply">
                                            <button class="areply-post-btn" type="submit">Reply</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-posts">
                                <div class="activity-group1">
                                    <div class="main-user-dts1">
                                        <img src="images/event-view/user-1.jpg" alt="">
                                        <div class="user-text3">
                                            <h4>John Doe</h4>
                                            <span>posted an update a 8 min ago</span>
                                        </div>
                                    </div>
                                    <div class="dot-option dropdown">
                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                        <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                            <a class="post-link-item" href="#">Hide</a>
                                            <a class="post-link-item" href="#">Edit</a>
                                            <a class="post-link-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity-descp">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.</p>
                                </div>
                                <div class="like-comment-view">
                                    <div class="left-comments">
                                        <a href="#" class="like-item" title="Like">
                                            <i class="fas fa-heart"></i>
                                            <span><ins>Like</ins> 5</span>
                                        </a>
                                        <a href="#" class="like-item lc-left" title="Comment">
                                            <i class="fas fa-comment-alt"></i>
                                            <span><ins>Comment</ins> 0</span>
                                        </a>
                                    </div>
                                    <div class="right-comments">
                                        <a href="#" class="like-item" title="Share">
                                            <i class="fas fa-eye"></i>
                                            <span><ins>View</ins> 11</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-posts">
                                <div class="activity-group1">
                                    <div class="main-user-dts1">
                                        <img src="images/event-view/user-1.jpg" alt="">
                                        <div class="user-text3">
                                            <h4>John Doe</h4>
                                            <span>posted an update a 8 min ago</span>
                                        </div>
                                    </div>
                                    <div class="dot-option dropdown">
                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                        <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                            <a class="post-link-item" href="#">Hide</a>
                                            <a class="post-link-item" href="#">Edit</a>
                                            <a class="post-link-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity-descp">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.</p>
                                </div>
                                <div class="like-comment-view">
                                    <div class="left-comments">
                                        <a href="#" class="like-item" title="Like">
                                            <i class="fas fa-heart"></i>
                                            <span><ins>Like</ins> 6</span>
                                        </a>
                                        <a href="#" class="like-item lc-left" title="Comment">
                                            <i class="fas fa-comment-alt"></i>
                                            <span><ins>Comment</ins> 0</span>
                                        </a>
                                    </div>
                                    <div class="right-comments">
                                        <a href="#" class="like-item" title="Share">
                                            <i class="fas fa-eye"></i>
                                            <span><ins>View</ins> 15</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-loader mb-50">
                                <div class="spinner">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
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
                                <img class="weather-icon-center" src="http://openweathermap.org/img/wn/{{$weather["icon"]}}@2x.png" alt="">
                                <span>{{$weather['temp']}}°</span>
                            </div>
                            <ul class="weekly-weather"></ul>
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
                                                <a href="{{$news['world'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-globe-europe"></i>
                                                    <h6>&nbsp;&nbsp;World</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['world'][1]['title']}}
                                                </div>
                                                <a href="{{$news['world'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-globe-europe"></i>
                                                    <h6>&nbsp;&nbsp;World</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['world'][2]['title']}}
                                                </div>
                                                <a href="{{$news['world'][2]['url']}}">Continue reading...</a>
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
                                                <a href="{{$news['science'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-atom"></i>
                                                    <h6>&nbsp;&nbsp;Science</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['science'][1]['title']}}
                                                </div>
                                                <a href="{{$news['science'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-atom"></i>
                                                    <h6>&nbsp;&nbsp;Science</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['science'][2]['title']}}
                                                </div>
                                                <a href="{{$news['science'][2]['url']}}">Continue reading...</a>
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
                                                <a href="{{$news['technology'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-microchip"></i>
                                                    <h6>&nbsp;&nbsp;Technology</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['technology'][1]['title']}}
                                                </div>
                                                <a href="{{$news['technology'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-microchip"></i>
                                                    <h6>&nbsp;&nbsp;Technology</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['technology'][2]['title']}}
                                                </div>
                                                <a href="{{$news['technology'][2]['url']}}">Continue reading...</a>
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
                                                <a href="{{$news['music'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-music"></i>
                                                    <h6>&nbsp;&nbsp;Music</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['music'][1]['title']}}
                                                </div>
                                                <a href="{{$news['music'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-music"></i>
                                                    <h6>&nbsp;&nbsp;Music</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['music'][2]['title']}}
                                                </div>
                                                <a href="{{$news['music'][2]['url']}}">Continue reading...</a>
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
                                                <a href="{{$news['movies'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-film"></i>
                                                    <h6>&nbsp;&nbsp;Movie</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['movies'][1]['title']}}
                                                </div>
                                                <a href="{{$news['movies'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-film"></i>
                                                    <h6>&nbsp;&nbsp;Movie</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['movies'][2]['title']}}
                                                </div>
                                                <a href="{{$news['movies'][2]['url']}}">Continue reading...</a>
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
                                                <a href="{{$news['games'][0]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-dice"></i>
                                                    <h6>&nbsp;&nbsp;Games</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['games'][1]['title']}}
                                                </div>
                                                <a href="{{$news['games'][1]['url']}}">Continue reading...</a>
                                            </div>
                                            <div class="news-item">
                                                <div class="news-item-heading">
                                                    <i class="fas fa-dice"></i>
                                                    <h6>&nbsp;&nbsp;Games</h6>
                                                </div>
                                                <div class="news-description">
                                                    {{$news['games'][2]['title']}}
                                                </div>
                                                <a href="{{$news['games'][2]['url']}}">Continue reading...</a>
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