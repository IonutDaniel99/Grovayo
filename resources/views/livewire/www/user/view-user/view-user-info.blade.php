    <div>
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
                                    @ENDIF
                                    @IF($about_model['user_city'] != NULL)
                                    / {{$about_model['user_city']}}
                                    @ENDIF
                                </span>
                                @ELSE
                                <span><i class="fas fa-map-marker-alt" style="margin-right:5px"></i>Not Specified</span>
                                @ENDIF
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 my-3 d-flex align-items-center justify-content-center">
                        <ul class="right-details my-auto">
                            <li>
                                <div class="user-buttons">
                                    <div class="user-follow">
                                        <a role="button" wire:click="toggle_follow_state()">
                                            <texte wire:loading.remove>{{$state}}</texte>
                                            <texte wire:loading>
                                                <div class="spinner" style="border: none !important">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                            </texte>
                                        </a>
                                    </div>
                                    @if($state == 'Followed')
                                    <div class="user-follow">
                                        <a href="user_dashboard_events.html">Message</a>
                                    </div>
                                    @endif
                                    <div class="user-follow">
                                        <a href="user_dashboard_events.html"><i class="fas fa-ellipsis-h"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>