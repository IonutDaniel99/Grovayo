<x-app-layout>
    <main class="Search-results">
        <div class="main-section">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="search-bar-main">
                            <input type="text" class="search-1" placeholder="Search events by categories...">
                            <i class="fas fa-search srch-ic"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-search-filters">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-filters">
                                <div class="search-filters-left">
                                    <div class="dropdown">
                                        <a href="" class="filter-d dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Worldwide <i class="fas fa-angle-down"></i></a>
                                        <div class="dropdown-menu worldwide-dropdown">
                                            <div class="worldwide-form">
                                                <h6>Location</h6>
                                                <div class="worldwide-inputs">
                                                    <form>
                                                        <div class="form-group">
                                                            <label>Country / Region*</label>
                                                            <div class="select-bg">
                                                                <select class="nice-select wide" id="country-dropdown" name="country">
                                                                    <option>Select Country</option>
                                                                    <option value="da">text</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mc-top">
                                                            <input class="title-discussion-input" type="text" placeholder="City">
                                                        </div>
                                                        <button class="create-topic mt-4" type="submit">Apply</button>
                                                    </form>
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
            <div class="all-search-events">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="userbg-dt dpbg" style="background-image:url(storage/background-photos/default.jpg);">
                                        <div class="usr-pic">
                                            <img src="storage/profile-photos/esPrfWC3CL1WQuEe8srU47kMf7cMxbL0yz4Pens5.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>danimocanu</h4>
                                        <h6 style="color: #adadad;text-decoration: underline;">danimocanu</h6>
                                        <span><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                            </svg><!-- <i class="fas fa-map-marker-alt"></i> Font Awesome fontawesome.com -->
                                            Unspecified
                                        </span>
                                    </div>
                                    <ul class="follow-msg-dt">
                                        <li>
                                            <div class="msg-dt-sm">
                                                <button class="msg-btn1" wire:click="message()">Message</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="follow-dt-sm">
                                                <button class="follow-btn1" wire:click="deleteFollow(6)">Delete Follow</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="profile-link">
                                        <a href="/user/danimocanu">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="userbg-dt dpbg" style="background-image:url(storage/background-photos/default.jpg);">
                                        <div class="usr-pic">
                                            <img src="storage/profile-photos/esPrfWC3CL1WQuEe8srU47kMf7cMxbL0yz4Pens5.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>danimocanu</h4>
                                        <h6 style="color: #adadad;text-decoration: underline;">danimocanu</h6>
                                        <span><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                            </svg><!-- <i class="fas fa-map-marker-alt"></i> Font Awesome fontawesome.com -->
                                            Unspecified
                                        </span>
                                    </div>
                                    <ul class="follow-msg-dt">
                                        <li>
                                            <div class="msg-dt-sm">
                                                <button class="msg-btn1" wire:click="message()">Message</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="follow-dt-sm">
                                                <button class="follow-btn1" wire:click="deleteFollow(6)">Delete Follow</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="profile-link">
                                        <a href="/user/danimocanu">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="userbg-dt dpbg" style="background-image:url(storage/background-photos/default.jpg);">
                                        <div class="usr-pic">
                                            <img src="storage/profile-photos/esPrfWC3CL1WQuEe8srU47kMf7cMxbL0yz4Pens5.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>danimocanu</h4>
                                        <h6 style="color: #adadad;text-decoration: underline;">danimocanu</h6>
                                        <span><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                            </svg><!-- <i class="fas fa-map-marker-alt"></i> Font Awesome fontawesome.com -->
                                            Unspecified
                                        </span>
                                    </div>
                                    <ul class="follow-msg-dt">
                                        <li>
                                            <div class="msg-dt-sm">
                                                <button class="msg-btn1" wire:click="message()">Message</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="follow-dt-sm">
                                                <button class="follow-btn1" wire:click="deleteFollow(6)">Delete Follow</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="profile-link">
                                        <a href="/user/danimocanu">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="userbg-dt dpbg" style="background-image:url(storage/background-photos/default.jpg);">
                                        <div class="usr-pic">
                                            <img src="storage/profile-photos/esPrfWC3CL1WQuEe8srU47kMf7cMxbL0yz4Pens5.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>danimocanu</h4>
                                        <h6 style="color: #adadad;text-decoration: underline;">danimocanu</h6>
                                        <span><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                            </svg><!-- <i class="fas fa-map-marker-alt"></i> Font Awesome fontawesome.com -->
                                            Unspecified
                                        </span>
                                    </div>
                                    <ul class="follow-msg-dt">
                                        <li>
                                            <div class="msg-dt-sm">
                                                <button class="msg-btn1" wire:click="message()">Message</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="follow-dt-sm">
                                                <button class="follow-btn1" wire:click="deleteFollow(6)">Delete Follow</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="profile-link">
                                        <a href="/user/danimocanu">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="userbg-dt dpbg" style="background-image:url(storage/background-photos/default.jpg);">
                                        <div class="usr-pic">
                                            <img src="storage/profile-photos/esPrfWC3CL1WQuEe8srU47kMf7cMxbL0yz4Pens5.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>danimocanu</h4>
                                        <h6 style="color: #adadad;text-decoration: underline;">danimocanu</h6>
                                        <span><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                            </svg><!-- <i class="fas fa-map-marker-alt"></i> Font Awesome fontawesome.com -->
                                            Unspecified
                                        </span>
                                    </div>
                                    <ul class="follow-msg-dt">
                                        <li>
                                            <div class="msg-dt-sm">
                                                <button class="msg-btn1" wire:click="message()">Message</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="follow-dt-sm">
                                                <button class="follow-btn1" wire:click="deleteFollow(6)">Delete Follow</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="profile-link">
                                        <a href="/user/danimocanu">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="userbg-dt dpbg" style="background-image:url(storage/background-photos/default.jpg);">
                                        <div class="usr-pic">
                                            <img src="storage/profile-photos/esPrfWC3CL1WQuEe8srU47kMf7cMxbL0yz4Pens5.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>danimocanu</h4>
                                        <h6 style="color: #adadad;text-decoration: underline;">danimocanu</h6>
                                        <span><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                            </svg><!-- <i class="fas fa-map-marker-alt"></i> Font Awesome fontawesome.com -->
                                            Unspecified
                                        </span>
                                    </div>
                                    <ul class="follow-msg-dt">
                                        <li>
                                            <div class="msg-dt-sm">
                                                <button class="msg-btn1" wire:click="message()">Message</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="follow-dt-sm">
                                                <button class="follow-btn1" wire:click="deleteFollow(6)">Delete Follow</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="profile-link">
                                        <a href="/user/danimocanu">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="userbg-dt dpbg" style="background-image:url(storage/background-photos/default.jpg);">
                                        <div class="usr-pic">
                                            <img src="storage/profile-photos/esPrfWC3CL1WQuEe8srU47kMf7cMxbL0yz4Pens5.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>danimocanu</h4>
                                        <h6 style="color: #adadad;text-decoration: underline;">danimocanu</h6>
                                        <span><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                            </svg><!-- <i class="fas fa-map-marker-alt"></i> Font Awesome fontawesome.com -->
                                            Unspecified
                                        </span>
                                    </div>
                                    <ul class="follow-msg-dt">
                                        <li>
                                            <div class="msg-dt-sm">
                                                <button class="msg-btn1" wire:click="message()">Message</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="follow-dt-sm">
                                                <button class="follow-btn1" wire:click="deleteFollow(6)">Delete Follow</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="profile-link">
                                        <a href="/user/danimocanu">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="userbg-dt dpbg" style="background-image:url(storage/background-photos/default.jpg);">
                                        <div class="usr-pic">
                                            <img src="storage/profile-photos/esPrfWC3CL1WQuEe8srU47kMf7cMxbL0yz4Pens5.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>danimocanu</h4>
                                        <h6 style="color: #adadad;text-decoration: underline;">danimocanu</h6>
                                        <span><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                            </svg><!-- <i class="fas fa-map-marker-alt"></i> Font Awesome fontawesome.com -->
                                            Unspecified
                                        </span>
                                    </div>
                                    <ul class="follow-msg-dt">
                                        <li>
                                            <div class="msg-dt-sm">
                                                <button class="msg-btn1" wire:click="message()">Message</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="follow-dt-sm">
                                                <button class="follow-btn1" wire:click="deleteFollow(6)">Delete Follow</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="profile-link">
                                        <a href="/user/danimocanu">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="userbg-dt dpbg" style="background-image:url(storage/background-photos/default.jpg);">
                                        <div class="usr-pic">
                                            <img src="storage/profile-photos/esPrfWC3CL1WQuEe8srU47kMf7cMxbL0yz4Pens5.jpeg" alt="">
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>danimocanu</h4>
                                        <h6 style="color: #adadad;text-decoration: underline;">danimocanu</h6>
                                        <span><svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                            </svg><!-- <i class="fas fa-map-marker-alt"></i> Font Awesome fontawesome.com -->
                                            Unspecified
                                        </span>
                                    </div>
                                    <ul class="follow-msg-dt">
                                        <li>
                                            <div class="msg-dt-sm">
                                                <button class="msg-btn1" wire:click="message()">Message</button>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="follow-dt-sm">
                                                <button class="follow-btn1" wire:click="deleteFollow(6)">Delete Follow</button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="profile-link">
                                        <a href="/user/danimocanu">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="main-loader search-loader">
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
    </main>
</x-app-layout>