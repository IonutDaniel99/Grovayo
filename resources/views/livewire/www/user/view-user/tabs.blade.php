@if(Route::current()->getName() === 'UserActivity')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('UserActivity', ['username' => $username]) }}">Activity</a>
    </li>
    <li class=" nav-item">
        <a class="nav-link" href="{{ route('UserAbout', ['username' => $username]) }}">About</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserFollowers', ['username' => $username]) }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserFollowing', ['username' => $username]) }}">Following <span class="badge badge-alrts">20</span></a>
    </li>
</ul>
@elseif(Route::current()->getName() === 'UserAbout')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserActivity', ['username' => $username]) }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('UserAbout', ['username' => $username]) }}">About</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserFollowers', ['username' => $username]) }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserFollowing', ['username' => $username]) }}">Following <span class="badge badge-alrts">20</span></a>
    </li>
</ul>

@elseif(Route::current()->getName() === 'UserFollowers')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserActivity', ['username' => $username]) }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserAbout', ['username' => $username]) }}">About</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserFollowers', ['username' => $username]) }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserFollowing', ['username' => $username]) }}">Following <span class="badge badge-alrts">20</span></a>
    </li>

</ul>

@elseif(Route::current()->getName() === 'UserFollowing')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserActivity', ['username' => $username]) }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserAbout', ['username' => $username]) }}">About</a>
    </li>

    <li class="nav-item">
        <a class="nav-link active" href="{{ route('UserFollowers', ['username' => $username]) }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserFollowing', ['username' => $username]) }}">Following <span class="badge badge-alrts">20</span></a>
    </li>
</ul>

@else
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('UserActivity', ['username' => $username]) }}">Activity</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserAbout', ['username' => $username]) }}">About</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserFollowers', ['username' => $username]) }}">Followers <span class="badge badge-alrts">20</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('UserFollowing', ['username' => $username]) }}">Following <span class="badge badge-alrts">20</span></a>
    </li>
</ul>
@endif