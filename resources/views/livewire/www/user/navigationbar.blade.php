<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start" style="z-index:1">
                    <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto" href="{{ route('Redirects') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                    <button class="navbar-toggler align-self-start" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    @cannot("User")
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-start bg-dark1 p-3 ml-lg-5 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                        <ul class="navbar-nav align-self-stretch">
                            @if(Route::is('Home'))
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('Home') }}">Home<span class="sr-only">(current)</span></a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('Home') }}">Home</span></a>
                            </li>
                            @endif
                            @if(Route::is('Weather'))
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('Weather') }}">Weather<span class="sr-only">(current)</span></a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('Weather') }}">Weather</span></a>
                            </li>
                            @endif
                            @if(Route::is('Blog'))
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('Blog') }}">Blog<span class="sr-only">(current)</span></a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('Blog') }}">Blog</span></a>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <ul class="group-icons">
                        <li><a href="{{ route('Search') }}" class="icon-set"><i class="fas fa-search"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="icon-set dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                @if($friends_request == NULL)
                                <i class="fas fa-user-plus"></i>
                                @else
                                <i class="fas fa-user-plus" style="color:darkorange"></i>
                                @endif
                            </a>
                            @if(Auth::user()->is_private == 1)
                            <div class="dropdown-menu user-request-dropdown dropdown-menu-right">
                                @if($friends_request == NULL)
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <span class="text-truncate mx-0">You dont have any friends request. </span>
                                        </div>
                                    </div>
                                </div>
                                @else
                                @foreach($friends_request as $friend_request)
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="/user/{{$friend_request['follower_request_username']}}">
                                                @if($friend_request['follower_request_profile_photo'])
                                                <img src="/{{$friend_request['follower_request_profile_photo']}}" alt="">
                                                @else
                                                <img src="https://ui-avatars.com/api/?name={{$friend_request['follower_request_username']}}&color=7F9CF5&background=EBF4FF" alt="">
                                                @endif
                                            </a>
                                            <a href="/user/{{$friend_request['follower_request_username']}}" class="user-title">
                                                <span>
                                                    {{$friend_request['follower_request_name']}}
                                                </span>
                                                <span class="time4">
                                                    <d style="float:right">{{$friend_request['follower_request_date']->diffForHumans()}}</d>
                                                </span>
                                                <span class="text-truncate mx-0">Has requested to follow you!</span>
                                            </a>
                                        </div>
                                        <div class="user-request-dt" style="width: 100%; margin: 5px 0px -5px -5px;">
                                            <button class="accept-btn mx-1" style="min-width: 70px;" type="submit" wire:click="accept({{$friend_request['follower_request_id']}})">Accept</i></button>
                                            <button class="accept-btn mx-1" style="min-width: 70px;" type="submit" wire:click="decline({{$friend_request['follower_request_id']}})">Decline</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <div class="user-request-list">
                                    <a href="{{ route('Settings_Friends_Request_Index') }}" class="view-all">View All Friend Requests</a>
                                </div>
                            </div>
                            @else
                            <div class="dropdown-menu user-request-dropdown dropdown-menu-right">
                                @if(!empty($latest_friends))
                                @foreach($latest_friends as $friend)
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="/user/{{$friend['follower_request_username']}}">
                                                @if($friend['follower_request_profile_photo'])
                                                <img src="/{{$friend['follower_request_profile_photo']}}" alt="">
                                                @else
                                                <img src="https://ui-avatars.com/api/?name={{$friend['follower_request_username']}}&color=7F9CF5&background=EBF4FF" alt="">
                                                @endif
                                            </a>
                                            <a href="/user/{{$friend['follower_request_username']}}" class="user-title">
                                                <span>
                                                    {{$friend['follower_request_name']}}
                                                </span>
                                                <span class="time4">
                                                    <d style="float:right">{{$friend['follower_request_date']->diffForHumans()}}</d>
                                                </span>
                                                <span class="text-truncate mx-0">Has recently followed you!</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <span class="text-truncate mx-0">No one followed you yet.</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="user-request-list">
                                    <a href="{{ route('Settings_Profile_Index') }}" class="view-all">Profile Settings!</a>
                                </div>
                            </div>
                            @endif
                        </li>
                        <li class="dropdown">
                            <a href="#" class="icon-set dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                <i class="fas fa-bell"></i>
                            </a>
                            <div class="dropdown-menu notification-dropdown dropdown-menu-right">
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Jassica William </div>
                                                <span>comment on your video.</span>
                                            </a>
                                        </div>
                                        <div class="time5">2 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Rock Smith</div>
                                                <span>your order is accepted.</span>
                                            </a>
                                        </div>
                                        <div class="time5">5 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#"><img src="images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Joy Doe </div>
                                                <span>your bill slip sent on your email.</span>
                                            </a>
                                        </div>
                                        <div class="time5">10 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <a href="my_dashboard_all_notifications.html" class="view-all">View All Notifications</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @endcan
                    <div class="account order-1 dropdown">
                        <a href="#" class="account-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                            <div class="user-dp">@if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                                @else
                                <button class="flex items-center text-sm font-medium text-white hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                                @endif
                            </div>
                            <span>{{ Auth::user()->name }} <i class="fas fa-angle-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu account-dropdown dropdown-menu-right">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>
                            @cannot("User")

                            <x-jet-dropdown-link href="{{ route('Profile_Activity_Index') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="{{ route('Settings_Personal_Info_Index') }}">
                                {{ __('Settings') }}
                            </x-jet-dropdown-link>
                            @endcan


                            @can("Support|Moderator|Administrator|Owner")
                            <x-jet-dropdown-link href="{{ route('Admin_Dashboard_Index') }}">
                                {{ __('Admin') }}
                            </x-jet-dropdown-link>
                            @endcan
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-jet-dropdown-link>
                            </form>
                            <div style="border-top: 1px solid #ddd;"></div>
                        </div>
                    </div>
                </nav>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
</header>