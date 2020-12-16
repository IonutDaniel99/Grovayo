<div>
    <div class="dash-discussions mb20">
        <div class="main-section">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="search-bar-main">
                            <input type="text" class="search-1" placeholder="Search peoples...">
                            <i class="fas fa-search srch-ic"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-search-events">
                <div class="row">
                    @foreach($follower_list as $follower)
                    <div class="col-lg-3 col-md-6">
                        <div class="user-data full-width">
                            <div class="user-profile">
                                <div class="userbg-dt dpbg-<?php echo random_int(1, 12); ?>">
                                    <div class="usr-pic">
                                        @if($follower['follower_request_profile_photo'] == NULL)
                                        <img src="https://ui-avatars.com/api/?name={{$follower['follower_request_username']}}&color=7F9CF5&background=EBF4FF" alt="">
                                        @else
                                        <img src="storage/{{$follower['follower_request_profile_photo']}}" alt="">
                                        @endif
                                    </div>
                                </div>
                                <div class="user-main-details">
                                    <h4>{{$follower['follower_request_username']}}</h4>
                                    <span><i class="fas fa-map-marker-alt"></i>
                                        @if($follower['follower_request_location'] == NULL)
                                        Unspecified
                                        @else
                                        {{$follower['follower_request_location']}}
                                        @endif
                                    </span>
                                </div>
                                <ul class="follow-msg-dt">
                                    <li>
                                        @if($follower['follower_request_isFriend'] == true)
                                        <div class="msg-dt-sm">
                                            <button class="msg-btn1" wire:click="message()">Message</button>
                                        </div>
                                        @else
                                        <div class="msg-dt-sm">
                                            <button class="follow-btn1" wire:click="followBack()">Follow Back</button>
                                        </div>
                                        @endif
                                    </li>
                                    <li>
                                        <div class=" follow-dt-sm">
                                            <button class="follow-btn1" wire:click="deleteFollow({{$follower['follower_request_id']}})">Delete Follow</button>
                                        </div>
                                    </li>
                                </ul>
                                <div class="profile-link">
                                    <a href="/user/{{$follower['follower_request_username']}}">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
</div>