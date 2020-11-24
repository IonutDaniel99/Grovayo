<x-app-layout>
    @livewire('nav.profile-template')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('ProfileActivity') }}">Activity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_dashboard_about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_dashboard_discussions.html">Discussions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_dashboard_events.html">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_dashboard_followers.html">Followers <span class="badge badge-alrts">20</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_dashboard_following.html">Following <span class="badge badge-alrts">20</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_dashboard_messages.html">Messages <span class="badge badge-alrts">2</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_dashboard_credits.html">Credits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_dashboard_booked_events.html">Booked Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_dashboard_history.html">History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_dashboard_setting_info.html">Setting</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>