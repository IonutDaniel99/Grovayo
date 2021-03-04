<div>
    <main class="Search-results">
        <div class="main-section">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="search-bar-main">
                            <input type="text" class="search-1" placeholder="Search users on {{ config('app.name') }}" wire:model="query" wire:keydown.escape="resetQuery">
                            <i class="fas fa-search srch-ic"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="all-search-events" style="margin-top: 50px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" wire:loading>
                            <div class="main-loader search-loader">
                                <div class="spinner">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                        </div>
                        @if(!empty($query))
                        @if(!empty($users))
                        @foreach($users as $user)
                        <div class="col-lg-3 col-md-6">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="userbg-dt dpbg" style="background-image:url('{{$user['background_image_url']}}');">
                                        <div class="usr-pic">
                                            @if($user['profile_photo_path'] == null)
                                            <img src="https://ui-avatars.com/api/?name={{$user['name']}}&color=7F9CF5&background=EBF4FF" alt="">
                                            @else
                                            <img src="storage/{{$user['profile_photo_path']}}" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>{{$user['name']}}</h4>
                                        <h6 style="color: #adadad;text-decoration: underline;">{{$user['username']}}</h6>
                                        <span>
                                            <svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                            </svg>
                                            @if($user['about_model']['user_country'] == null)
                                            Unspecified
                                            @else
                                            {{$user['about_model']['user_country']}}
                                            @endif
                                        </span>
                                    </div>
                                    <div class="follow-msg-dt">
                                        <div class="user-follow" style="margin:0 auto">
                                            <a type="button" class="msg-btn1" href="/user/{{$user['username']}}" style="padding: 5px 10px !important">View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-md-12" style="text-align:center;">
                            <p style="font-size:24px">No Results!</p>
                        </div>
                        @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>