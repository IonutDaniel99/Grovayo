<div class="dash-todo-thumbnail-area1">
    <div class="todo-thumb1 dash-bg-image1 dash-bg-overlay" style="background-image:url({{ $profile['background_image_url'] }})"> </div>
    <div class="dash-todo-header1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="my-profile-dash">
                        <div class="my-dp-dash">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dash-dts">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="event-title">
                    <div class="my-dash-dt">
                        <h3>{{ Auth::user()->name }}</h3>
                        <span>Member since {{date_format($user_about['created_at'],"F j, Y")}}</span>
                        @IF($user_about['user_country'] != NULL)
                        <span><i class="fas fa-map-marker-alt" style="margin-right:5px"></i>
                            From: {{$user_about['user_country']}}
                            @IF($user_about['user_state'] != NULL)
                            / {{$user_about['user_state']}}
                            @IF($user_about['user_city'] != NULL)
                            / {{$user_about['user_city']}}</span>
                        @ENDIF
                        @ENDIF
                        @ELSE
                        <span><i class="fas fa-map-marker-alt" style="margin-right:5px"></i>Not Specified</span>
                        @ENDIF
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pr-2 pt-2">
                <ul class="right-details">
                    <li>
                        <div class="all-dis-evnt">
                            <div class="dscun-txt">Posts</div>
                            <div class="dscun-numbr">3</div>
                        </div>
                    </li>
                    <li>
                        <div class="all-dis-evnt">
                            <div class="dscun-txt">Followers</div>
                            <div class="dscun-numbr">{{$user_about['followed_number']}}</div>
                        </div>
                    </li>
                    <li>
                        <div class="all-dis-evnt">
                            <div class="dscun-txt">Following</div>
                            <div class="dscun-numbr">{{$user_about['following_number']}}</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>