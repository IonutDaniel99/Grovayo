<div class="dash-todo-thumbnail-area1">
    <div class="todo-thumb1 dash-bg-image1 dash-bg-overlay" style="background-image:url(/{{$user_model->background_image_url}})"> </div>
    <div class="dash-todo-header1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="my-profile-dash">
                        <div class="my-dp-dash">
                            @if($user_model->profile_photo_path == NULL)
                            <img src="https://ui-avatars.com/api/?name={{$user_model->username}}&color=7F9CF5&background=EBF4FF" alt="{{ $user_model->name }}">
                            @else
                            <img src="{{ $user_model->profile_photo_path }}" alt="{{ $user_model->name }}">
                            @endif
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
                        <h3>{{ $user_model->name }}</h3>
                        <span>Member since {{date_format($user_model['created_at'],"F j, Y")}}</span>
                        @IF($about_model['user_country'] != NULL)
                        <span><i class="fas fa-map-marker-alt" style="margin-right:5px"></i>
                            From: {{$about_model['user_country']}}
                            @IF($about_model['user_state'] != NULL)
                            / {{$about_model['user_state']}}
                            @IF($about_model['user_city'] != NULL)
                            / {{$about_model['user_city']}}</span>
                        @ENDIF
                        @ENDIF
                        @ELSE
                        <span><i class="fas fa-map-marker-alt" style="margin-right:5px"></i>Not Specified</span>
                        @ENDIF
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <ul class="right-details">
                    <li>
                        <div class="my-all-evnts">
                            <a href="my_dashboard_events.html">View Events</a>
                        </div>
                    </li>
                    <li>
                        <div class="all-dis-evnt">
                            <div class="dscun-txt">Events</div>
                            <div class="dscun-numbr">22</div>
                        </div>
                    </li>
                    <li>
                        <div class="all-dis-evnt">
                            <div class="dscun-txt">Discussions</div>
                            <div class="dscun-numbr">40</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>