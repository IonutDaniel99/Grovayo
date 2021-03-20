<div>
    @if($friends_request == NULL)
    <div class="user-request-list">
        <div class="request-users">
            <div class="user-request-dt">
                You dont have any friends request.
            </div>
        </div>
    </div>
    @else
    @foreach($friends_request as $friend_request)
    <div class="user-request-list">
        <div class="request-users">
            <div class="user-request-dt">
                <a href="/user/{{$friend_request['follower_request_username']}}"><img src="/{{$friend_request['follower_request_profile_photo']}}" alt="{{$friend_request['follower_request_profile_photo']}}"></a>
                <a href="/user/{{$friend_request['follower_request_username']}}" class="user-title">{{$friend_request['follower_request_name']}}</a>
            </div>
            <button class="accept-btn mx-1" type="submit" wire:click="decline({{$friend_request['follower_request_id']}})">Decline</button>
            <button class="accept-btn mx-1" type="submit" wire:click="accept({{$friend_request['follower_request_id']}})">Accept</button>
        </div>
    </div>
    @endforeach
    @endif
</div>