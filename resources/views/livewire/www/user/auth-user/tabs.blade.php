@if(Route::current()->getName() === 'Profile_Activity_Index')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('Profile_Activity_Index') }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_About_Index') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Followers_Index') }}">Followers <span class="badge badge-alrts">{{$user_follow['followed_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Following_Index') }}">Following <span class="badge badge-alrts">{{$user_follow['following_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Messages_Index') }}">Messages <span class="badge badge-alrts">2</span></a>
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
        <a class="nav-link" href="{{ route('Profile_Followers_Index') }}">Followers <span class="badge badge-alrts">{{$user_follow['followed_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Following_Index') }}">Following <span class="badge badge-alrts">{{$user_follow['following_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Messages_Index') }}">Messages <span class="badge badge-alrts">2</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('Settings_Personal_Info_Index') }}">Setting</a>
    </li>
</ul>
@elseif(Route::current()->getName() === 'Profile_Followers_Index')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Activity_Index') }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_About_Index') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('Profile_Followers_Index') }}">Followers <span class="badge badge-alrts">{{$user_follow['followed_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Following_Index') }}">Following <span class="badge badge-alrts">{{$user_follow['following_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Messages_Index') }}">Messages <span class="badge badge-alrts">2</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('Settings_Personal_Info_Index') }}">Setting</a>
    </li>
</ul>

@elseif(Route::current()->getName() === 'Profile_Following_Index')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Activity_Index') }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_About_Index') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Followers_Index') }}">Followers <span class="badge badge-alrts">{{$user_follow['followed_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('Profile_Following_Index') }}">Following <span class="badge badge-alrts">{{$user_follow['following_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Messages_Index') }}">Messages <span class="badge badge-alrts">2</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('Settings_Personal_Info_Index') }}">Setting</a>
    </li>
</ul>

@elseif(Route::current()->getName() === 'Profile_Messages_Index')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Activity_Index') }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_About_Index') }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Followers_Index') }}">Followers <span class="badge badge-alrts">{{$user_follow['followed_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Following_Index') }}">Following <span class="badge badge-alrts">{{$user_follow['following_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('Profile_Messages_Index') }}">Messages <span class="badge badge-alrts">2</span></a>
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
        <a class="nav-link" href="{{ route('Profile_Followers_Index') }}">Followers <span class="badge badge-alrts">{{$user_follow['followed_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Following_Index') }}">Following <span class="badge badge-alrts">{{$user_follow['following_number']}}</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('Profile_Messages_Index') }}">Messages <span class="badge badge-alrts">2</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('Settings_Personal_Info_Index') }}">Setting</a>
    </li>
</ul>
@endif