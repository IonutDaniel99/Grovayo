<x-app-layout>
    <div class="main-section main-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="main-left-sidebar">
                        <div class="user-data full-width">
                            <div class="user-profile">
                                <div class="username-dt dpbg-1">
                                    <div class="usr-pic">
                                        <img class="h-100 w-100" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="user-main-details">
                                    <h4>{{ Auth::user()->name }} </h4>
                                    <span><i class="fas fa-map-marker-alt"></i>India</span>
                                </div>
                                <ul class="followers-dts">
                                    <li>
                                        <div class="followers-dt-sm">
                                            <h4>Followers</h4>
                                            <span>155</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="followers-dt-sm">
                                            <h4>Following</h4>
                                            <span>355</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="profile-link">
                                    <a href="my_dashboard_activity.html">View Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="news-data full-width">
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
                <div class="col-lg-6 col-md-7">
                    <div class="center-section">
                        <div class="main-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a href="#tab-upcoming" class="nav-link active" data-toggle="tab">Upcoming</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-trending" class="nav-link" data-toggle="tab">Trending</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-this-week" class="nav-link" data-toggle="tab">This Week</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-upcoming">
                                    <div class="main-posts">
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html">
                                                        <h4>Event Title Here</h4>
                                                    </a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                                        <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                                            <a class="post-link-item" href="#">Hide</a>
                                                            <a class="post-link-item" href="#">Details</a>
                                                            <a class="post-link-item" href="#">User Profile</a>
                                                            <a class="post-link-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-main-image">
                                                <div class="main-photo">
                                                    <div class="photo-overlay"></div>
                                                    <img src="images/homepage/center/post-img-1.jpg" alt="">
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-city-dt">
                                                <ul class="city-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>City</span>
                                                                <ins>London</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>Date</span>
                                                                <ins>21 Nov 2019</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-clock"></i>
                                                            <div class="list-text-dt">
                                                                <span>Time</span>
                                                                <ins>6 PM to 9 PM</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-cloud-sun"></i>
                                                            <div class="list-text-dt">
                                                                <span>Weather</span>
                                                                <ins>Clear</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="event-go-dt">
                                                <ul class="go-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Going</span>
                                                                <ins>45</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>MayBe</span>
                                                                <ins>120</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Can't Go</span>
                                                                <ins>70</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="like-comments">
                                                <div class="left-comments">
                                                    <a href="#" class="like-item" title="Like">
                                                        <i class="fas fa-heart"></i>
                                                        <span><ins>Like</ins> 251</span>
                                                    </a>
                                                    <a href="#" class="like-item lc-left" title="Comment">
                                                        <i class="fas fa-comment-alt"></i>
                                                        <span><ins>Comment</ins> 10</span>
                                                    </a>
                                                </div>
                                                <div class="right-comments">
                                                    <a href="#" class="like-item" title="Share">
                                                        <i class="fas fa-share-alt"></i>
                                                        <span><ins>Share</ins> 21</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-loader">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-trending">
                                    <div class="main-posts">
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html">
                                                        <h4>Event Title Here</h4>
                                                    </a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                                        <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                                            <a class="post-link-item" href="#">Hide</a>
                                                            <a class="post-link-item" href="#">Details</a>
                                                            <a class="post-link-item" href="#">User Profile</a>
                                                            <a class="post-link-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-main-image">
                                                <div class="main-photo">
                                                    <div class="photo-overlay"></div>
                                                    <img src="images/homepage/center/post-img-1.jpg" alt="">
                                                    <div class="treading">
                                                        <img src="images/homepage/center/trending.svg" alt="">
                                                    </div>
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-city-dt">
                                                <ul class="city-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>City</span>
                                                                <ins>London</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>Date</span>
                                                                <ins>21 Nov 2019</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-clock"></i>
                                                            <div class="list-text-dt">
                                                                <span>Time</span>
                                                                <ins>6 PM to 9 PM</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-cloud-sun"></i>
                                                            <div class="list-text-dt">
                                                                <span>Weather</span>
                                                                <ins>Clear</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="event-go-dt">
                                                <ul class="go-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Going</span>
                                                                <ins>45</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>MayBe</span>
                                                                <ins>120</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Can't Go</span>
                                                                <ins>70</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="like-comments">
                                                <div class="left-comments">
                                                    <a href="#" class="like-item" title="Like">
                                                        <i class="fas fa-heart"></i>
                                                        <span><ins>Like</ins> 251</span>
                                                    </a>
                                                    <a href="#" class="like-item lc-left" title="Comment">
                                                        <i class="fas fa-comment-alt"></i>
                                                        <span><ins>Comment</ins> 10</span>
                                                    </a>
                                                </div>
                                                <div class="right-comments">
                                                    <a href="#" class="like-item" title="Share">
                                                        <i class="fas fa-share-alt"></i>
                                                        <span><ins>Share</ins> 21</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html">
                                                        <h4>Event Title Here</h4>
                                                    </a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                                        <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                                            <a class="post-link-item" href="#">Hide</a>
                                                            <a class="post-link-item" href="#">Details</a>
                                                            <a class="post-link-item" href="#">User Profile</a>
                                                            <a class="post-link-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-main-image">
                                                <div class="main-photo">
                                                    <div class="photo-overlay"></div>
                                                    <img src="images/homepage/center/post-img-2.jpg" alt="">
                                                    <div class="treading">
                                                        <img src="images/homepage/center/trending.svg" alt="">
                                                    </div>
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-city-dt">
                                                <ul class="city-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>City</span>
                                                                <ins>London</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>Date</span>
                                                                <ins>21 Nov 2019</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-clock"></i>
                                                            <div class="list-text-dt">
                                                                <span>Time</span>
                                                                <ins>6 PM to 9 PM</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-cloud-sun"></i>
                                                            <div class="list-text-dt">
                                                                <span>Weather</span>
                                                                <ins>Clear</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="event-go-dt">
                                                <ul class="go-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Going</span>
                                                                <ins>45</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>MayBe</span>
                                                                <ins>120</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Can't Go</span>
                                                                <ins>70</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="like-comments">
                                                <div class="left-comments">
                                                    <a href="#" class="like-item" title="Like">
                                                        <i class="fas fa-heart"></i>
                                                        <span><ins>Like</ins> 251</span>
                                                    </a>
                                                    <a href="#" class="like-item lc-left" title="Comment">
                                                        <i class="fas fa-comment-alt"></i>
                                                        <span><ins>Comment</ins> 10</span>
                                                    </a>
                                                </div>
                                                <div class="right-comments">
                                                    <a href="#" class="like-item" title="Share">
                                                        <i class="fas fa-share-alt"></i>
                                                        <span><ins>Share</ins> 21</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html">
                                                        <h4>Event Title Here</h4>
                                                    </a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                                        <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                                            <a class="post-link-item" href="#">Hide</a>
                                                            <a class="post-link-item" href="#">Details</a>
                                                            <a class="post-link-item" href="#">User Profile</a>
                                                            <a class="post-link-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-main-image">
                                                <div class="main-photo">
                                                    <div class="photo-overlay"></div>
                                                    <img src="images/homepage/center/post-img-3.jpg" alt="">
                                                    <div class="treading">
                                                        <img src="images/homepage/center/trending.svg" alt="">
                                                    </div>
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-city-dt">
                                                <ul class="city-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>City</span>
                                                                <ins>London</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>Date</span>
                                                                <ins>21 Nov 2019</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-clock"></i>
                                                            <div class="list-text-dt">
                                                                <span>Time</span>
                                                                <ins>6 PM to 9 PM</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-cloud-sun"></i>
                                                            <div class="list-text-dt">
                                                                <span>Weather</span>
                                                                <ins>Clear</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="event-go-dt">
                                                <ul class="go-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Going</span>
                                                                <ins>45</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>MayBe</span>
                                                                <ins>120</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Can't Go</span>
                                                                <ins>70</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="like-comments">
                                                <div class="left-comments">
                                                    <a href="#" class="like-item" title="Like">
                                                        <i class="fas fa-heart"></i>
                                                        <span><ins>Like</ins> 251</span>
                                                    </a>
                                                    <a href="#" class="like-item lc-left" title="Comment">
                                                        <i class="fas fa-comment-alt"></i>
                                                        <span><ins>Comment</ins> 10</span>
                                                    </a>
                                                </div>
                                                <div class="right-comments">
                                                    <a href="#" class="like-item" title="Share">
                                                        <i class="fas fa-share-alt"></i>
                                                        <span><ins>Share</ins> 21</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-loader">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-this-week">
                                    <div class="main-posts">
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html">
                                                        <h4>Event Title Here</h4>
                                                    </a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                                        <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                                            <a class="post-link-item" href="#">Hide</a>
                                                            <a class="post-link-item" href="#">Details</a>
                                                            <a class="post-link-item" href="#">User Profile</a>
                                                            <a class="post-link-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-main-image">
                                                <div class="main-photo">
                                                    <div class="photo-overlay"></div>
                                                    <img src="images/homepage/center/post-img-1.jpg" alt="">
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-city-dt">
                                                <ul class="city-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>City</span>
                                                                <ins>London</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>Date</span>
                                                                <ins>21 Nov 2019</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-clock"></i>
                                                            <div class="list-text-dt">
                                                                <span>Time</span>
                                                                <ins>6 PM to 9 PM</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-cloud-sun"></i>
                                                            <div class="list-text-dt">
                                                                <span>Weather</span>
                                                                <ins>Clear</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="event-go-dt">
                                                <ul class="go-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Going</span>
                                                                <ins>45</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>MayBe</span>
                                                                <ins>120</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Can't Go</span>
                                                                <ins>70</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="like-comments">
                                                <div class="left-comments">
                                                    <a href="#" class="like-item" title="Like">
                                                        <i class="fas fa-heart"></i>
                                                        <span><ins>Like</ins> 251</span>
                                                    </a>
                                                    <a href="#" class="like-item lc-left" title="Comment">
                                                        <i class="fas fa-comment-alt"></i>
                                                        <span><ins>Comment</ins> 10</span>
                                                    </a>
                                                </div>
                                                <div class="right-comments">
                                                    <a href="#" class="like-item" title="Share">
                                                        <i class="fas fa-share-alt"></i>
                                                        <span><ins>Share</ins> 21</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html">
                                                        <h4>Event Title Here</h4>
                                                    </a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                                        <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                                            <a class="post-link-item" href="#">Hide</a>
                                                            <a class="post-link-item" href="#">Details</a>
                                                            <a class="post-link-item" href="#">User Profile</a>
                                                            <a class="post-link-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-main-image">
                                                <div class="main-photo">
                                                    <div class="photo-overlay"></div>
                                                    <img src="images/homepage/center/post-img-2.jpg" alt="">
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-city-dt">
                                                <ul class="city-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>City</span>
                                                                <ins>London</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>Date</span>
                                                                <ins>21 Nov 2019</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-clock"></i>
                                                            <div class="list-text-dt">
                                                                <span>Time</span>
                                                                <ins>6 PM to 9 PM</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-cloud-sun"></i>
                                                            <div class="list-text-dt">
                                                                <span>Weather</span>
                                                                <ins>Clear</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="event-go-dt">
                                                <ul class="go-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Going</span>
                                                                <ins>45</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>MayBe</span>
                                                                <ins>120</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Can't Go</span>
                                                                <ins>70</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="like-comments">
                                                <div class="left-comments">
                                                    <a href="#" class="like-item" title="Like">
                                                        <i class="fas fa-heart"></i>
                                                        <span><ins>Like</ins> 251</span>
                                                    </a>
                                                    <a href="#" class="like-item lc-left" title="Comment">
                                                        <i class="fas fa-comment-alt"></i>
                                                        <span><ins>Comment</ins> 10</span>
                                                    </a>
                                                </div>
                                                <div class="right-comments">
                                                    <a href="#" class="like-item" title="Share">
                                                        <i class="fas fa-share-alt"></i>
                                                        <span><ins>Share</ins> 21</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html">
                                                        <h4>Event Title Here</h4>
                                                    </a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                                        <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                                            <a class="post-link-item" href="#">Hide</a>
                                                            <a class="post-link-item" href="#">Details</a>
                                                            <a class="post-link-item" href="#">User Profile</a>
                                                            <a class="post-link-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-main-image">
                                                <div class="main-photo">
                                                    <div class="photo-overlay"></div>
                                                    <img src="images/homepage/center/post-img-3.jpg" alt="">
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-city-dt">
                                                <ul class="city-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>City</span>
                                                                <ins>London</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>Date</span>
                                                                <ins>21 Nov 2019</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-clock"></i>
                                                            <div class="list-text-dt">
                                                                <span>Time</span>
                                                                <ins>6 PM to 9 PM</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-cloud-sun"></i>
                                                            <div class="list-text-dt">
                                                                <span>Weather</span>
                                                                <ins>Clear</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="event-go-dt">
                                                <ul class="go-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Going</span>
                                                                <ins>45</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>MayBe</span>
                                                                <ins>120</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Can't Go</span>
                                                                <ins>70</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="like-comments">
                                                <div class="left-comments">
                                                    <a href="#" class="like-item" title="Like">
                                                        <i class="fas fa-heart"></i>
                                                        <span><ins>Like</ins> 251</span>
                                                    </a>
                                                    <a href="#" class="like-item lc-left" title="Comment">
                                                        <i class="fas fa-comment-alt"></i>
                                                        <span><ins>Comment</ins> 10</span>
                                                    </a>
                                                </div>
                                                <div class="right-comments">
                                                    <a href="#" class="like-item" title="Share">
                                                        <i class="fas fa-share-alt"></i>
                                                        <span><ins>Share</ins> 21</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-loader">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div>
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
                        <div class="user-data full-width">
                            <div class="categories-left-heading">
                                <h3>Peoples</h3>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="/danimocanu"><img src="{{ Auth::user()->profile_photo_url }}" alt=""></a>
                                    <a href="/danimocanu">
                                        <h4>Johnson</h4>
                                    </a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="user_dashboard_activity.html"><img src="images/homepage/left-side/left-img-2.jpg" alt=""></a>
                                    <a href="user_dashboard_activity.html">
                                        <h4>Jassica William</h4>
                                    </a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="user_dashboard_activity.html"><img src="images/homepage/left-side/left-img-3.jpg" alt=""></a>
                                    <a href="user_dashboard_activity.html">
                                        <h4>Rock</h4>
                                    </a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="user_dashboard_activity.html"><img src="images/homepage/left-side/left-img-4.jpg" alt=""></a>
                                    <a href="user_dashboard_activity.html">
                                        <h4>Davil Smith</h4>
                                    </a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>