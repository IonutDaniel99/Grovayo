@if(Route::current()->getName() === 'Profile_Activity_Index')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('Profile_Activity_Index') }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_About_Index') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileDiscussion') }}">Discussions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowers') }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowing') }}">Following <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Messages') }}">Messages <span class="badge badge-alrts">2</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('Settings_Personal_Info_Index') }}">Setting</a>
    </li>
</ul>
@elseif(Route::current()->getName() === 'Profile_About_Index')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Activity_Index') }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('Profile_About_Index') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileDiscussion') }}">Discussions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowers') }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowing') }}">Following <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Messages') }}">Messages <span class="badge badge-alrts">2</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('Settings_Personal_Info_Index') }}">Setting</a>
    </li>
</ul>

@elseif(Route::current()->getName() === 'ProfileDiscussion')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Activity_Index') }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_About_Index') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('ProfileDiscussion') }}">Discussions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowers') }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowing') }}">Following <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Messages') }}">Messages <span class="badge badge-alrts">2</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('Settings_Personal_Info_Index') }}">Setting</a>
    </li>
</ul>

@elseif(Route::current()->getName() === 'ProfileFollowers')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Activity_Index') }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_About_Index') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileDiscussion') }}">Discussions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('ProfileFollowers') }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowing') }}">Following <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Messages') }}">Messages <span class="badge badge-alrts">2</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('Settings_Personal_Info_Index') }}">Setting</a>
    </li>
</ul>

@elseif(Route::current()->getName() === 'ProfileFollowing')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Activity_Index') }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_About_Index') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileDiscussion') }}">Discussions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowers') }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('ProfileFollowing') }}">Following <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Messages') }}">Messages <span class="badge badge-alrts">2</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('Settings_Personal_Info_Index') }}">Setting</a>
    </li>
</ul>

@elseif(Route::current()->getName() === 'Messages')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Activity_Index') }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_About_Index') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileDiscussion') }}">Discussions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowers') }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowing') }}">Following <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('Messages') }}">Messages <span class="badge badge-alrts">2</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Settings_Personal_Info_Index') }}">Setting</a>
    </li>
</ul>
@else
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Activity_Index') }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_About_Index') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileDiscussion') }}">Discussions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowers') }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('ProfileFollowing') }}">Following <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Messages') }}">Messages <span class="badge badge-alrts">2</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('Settings_Personal_Info_Index') }}">Setting</a>
    </li>
</ul>
@endif