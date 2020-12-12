<x-app-layout>
    <main class="dashboard-mp">
        @livewire('nav.profile.user-info')
        <div class="dash-tab-links">
            <div class="container">
                <div class="setting-page mb-20">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <div class="user-data full-width">
                                <div class="categories-left-heading">
                                    <h3>Your Details</h3>
                                </div>
                                @livewire('nav.settings.details-row')
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <div class="setting-form">
                                <div class="user-data full-width mb-0">
                                    <div class="about-left-heading">
                                        <h3>All Friend Requests</h3>
                                    </div>
                                    <div class="all-rqusts1">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                @foreach($friends_request as $friend_request)
                                                <div class="user-request-list">
                                                    <div class="request-users">
                                                        <div class="user-request-dt">
                                                            <a href="{{$friends_request['follower_request_username']}}"><img src="images/user-dp-1.jpg" alt=""></a>
                                                            <a href="#" class="user-title">Jassica William</a>
                                                        </div>
                                                        <button class="accept-btn">Accept</button>
                                                    </div>
                                                </div>
                                                @endforeach
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
    </main>
</x-app-layout>