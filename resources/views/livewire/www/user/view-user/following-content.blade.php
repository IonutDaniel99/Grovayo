<div>
    @if($is_private == 0)
    <div class="dash-tab-links">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <livewire:www.user.view-user.tabs :username='$username' />
                </div>
            </div>
            <div class="dash-discussions mb20">
                <div class="main-section">
                    @if($is_follower_list_empty == true)
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <p>You don't follow someone.</p>
                        </div>
                    </div>
                    @else
                    <div class="all-search-events">
                        <div class="row">
                            @foreach($follower_list as $follower)
                            <div class="col-lg-3 col-md-6">
                                <div class="user-data full-width">
                                    <div class="user-profile">
                                        <div class="userbg-dt dpbg dpbg-border" style="background-image:url(/{{$follower['follower_request_background_photo']}});">
                                            <div class="usr-pic">
                                                @if($follower['follower_request_profile_photo'] == NULL)
                                                <img src="https://ui-avatars.com/api/?name={{$follower['follower_request_username']}}&color=7F9CF5&background=EBF4FF" alt="{{$follower['follower_request_name']}}">
                                                @else
                                                <img src="/{{$follower['follower_request_profile_photo']}}" alt="{{$follower['follower_request_name']}}">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="user-main-details">
                                            <h4>{{$follower['follower_request_name']}}</h4>
                                            <h6 style="color: #adadad;text-decoration: underline;">{{$follower['follower_request_username']}}</h6>
                                            <span><i class="fas fa-map-marker-alt"></i>
                                                @if($follower['follower_request_country'] == NULL)
                                                Unspecified
                                                @else
                                                {{$follower['follower_request_state']}} / {{$follower['follower_request_country']}}
                                                @endif
                                            </span>
                                        </div>
                                        <div class="profile-link">
                                            <a href="/user/{{$follower['follower_request_username']}}">
                                                <button class="msg-btn1">View Profile</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
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