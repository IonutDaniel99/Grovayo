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
                        <div class="categories-left-heading">
                            <h3>Social Accounts</h3>
                        </div>
                        <div class="categories-items">
                            <a class="category-social-item" href="#"><i class="fas fa-globe" style="color:#51a5fb;"></i>www.example.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-facebook-square" style="color:#3b5998;"></i>http://www.facebook.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-twitter" style="color:#1da1f2;"></i>http://www.twitter.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-google-plus" style="color:#dd4b39;"></i>http://www.googleplus.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-instagram" style="color:#405de6;"></i>http://www.instagram.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-pinterest" style="color:#bd081c;"></i>http://www.pinterest.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-linkedin" style="color:#0077b5;"></i>http://www.linkedin.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-youtube" style="color:#ff0000;"></i>http://www.youtube.com/</a>
                        </div>
                    </div>
                    <div class="user-data full-width">
                        <div class="categories-left-heading">
                            <h3>People Viewed Profile</h3>
                        </div>
                        <div class="sugguest-user">
                            <div class="sugguest-user-dt">
                                <a href="#"><img src="images/homepage/left-side/left-img-1.jpg" alt=""></a>
                                <a href="#">
                                    <h4>{{$username}}</h4>
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
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="main-posts">
                        <div class="activity-posts">
                            <div class="activity-group1">
                                <div class="main-user-dts1">
                                    <img src="images/event-view/user-5.jpg" alt="">
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
                                        <img src="images/event-view/user-5.jpg" alt="">
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
                                    <img src="images/event-view/user-5.jpg" alt="">
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
                                    <img src="images/event-view/user-5.jpg" alt="">
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
                    <div class="w-weather mt-0">
                        <div class="weather-left">
                            <div class="weather-city">Ludhiana</div>
                            <div class="week-text">Monday</div>
                            <div class="week-text">14 Oct 2019</div>
                            <div class="week-text" style="font-size: 18px;"><i class="fas fa-tint"></i> 30%</div>
                            <ul>
                                <li>
                                    <div class="up-down"><i class="fas fa-long-arrow-alt-up"></i> 18°</div>
                                </li>
                                <li>
                                    <div class="up-down"><i class="fas fa-long-arrow-alt-down"></i> 25°</div>
                                </li>
                            </ul>
                        </div>
                        <div class="weather-right">
                            <i class="fas fa-cloud-sun"></i>
                            <span>22°</span>
                        </div>
                        <ul class="weekly-weather">
                            <li>
                                <div class="degree-text">32°</div>
                                <div class="weather-icon"><i class="fas fa-sun"></i></div>
                                <div class="day-text">Tue</div>
                            </li>
                            <li>
                                <div class="degree-text">19°</div>
                                <div class="weather-icon"><i class="fas fa-cloud-sun-rain"></i></div>
                                <div class="day-text">Wed</div>
                            </li>
                            <li>
                                <div class="degree-text">32°</div>
                                <div class="weather-icon"><i class="fas fa-cloud-sun"></i></div>
                                <div class="day-text">Thu</div>
                            </li>
                            <li>
                                <div class="degree-text">27°</div>
                                <div class="weather-icon"><i class="fas fa-wind"></i></div>
                                <div class="day-text">Fri</div>
                            </li>
                            <li>
                                <div class="degree-text">22°</div>
                                <div class="weather-icon"><i class="fas fa-cloud-showers-heavy"></i></div>
                                <div class="day-text">Sat</div>
                            </li>
                            <li>
                                <div class="degree-text">12°</div>
                                <div class="weather-icon"><i class="fas fa-snowflake"></i></div>
                                <div class="day-text">Sun</div>
                            </li>
                        </ul>
                    </div>
                    <div class="news-data-dash full-width">
                        <div class="categories-left-heading">
                            <h3>News</h3>
                        </div>
                        <div class="categories-items">
                            <div class="news-item">
                                <div class="news-item-heading">
                                    <i class="fas fa-music"></i>
                                    <h6>Music</h6>
                                </div>
                                <div class="news-description">
                                    Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="news-item-heading">
                                    <i class="fas fa-pen-nib"></i>
                                    <h6>Art</h6>
                                </div>
                                <div class="news-description">
                                    Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="news-item-heading">
                                    <i class="far fa-futbol"></i>
                                    <h6>Sports</h6>
                                </div>
                                <div class="news-description">
                                    Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
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
            <h4>Follow to see his posts, images and videos!</h4>
        </div>
    </div>
    @endif
</div>