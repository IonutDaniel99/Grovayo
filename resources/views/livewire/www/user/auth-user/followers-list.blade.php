<div>
    <div class="dash-discussions mb20">
        <div class="main-section">
            @if($is_follower_list_empty == true)
            <div class="container">
                <div class="row justify-content-md-center">
                    <p>You don't have any followers yet!</p>
                </div>
            </div>
            @else
            <div class="all-search-events">
                <div class="row">
                    @foreach($follower_list as $follower)
                    <div class="col-lg-3 col-md-6">
                        <div class="user-data full-width">
                            <div class="user-profile">
                                <div class="userbg-dt dpbg dpbg-border" style="background-image:url({{$follower['follower_request_background_photo']}});">
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
                                <ul class="follow-msg-dt">
                                    <li>
                                        <div class="user-follow" style="margin:0 auto">
                                            <a type="button" class="msg-btn1"
                                                href="/user/{{$follower['follower_request_username']}}"
                                                style="padding: 5px 10px !important">View Profile</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="follow-dt-sm">
                                            <button class="follow-btn1" wire:click="deleteFollow({{$follower['follower_request_id']}})">Delete Follow</button>
                                        </div>
                                    </li>
                                </ul>
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