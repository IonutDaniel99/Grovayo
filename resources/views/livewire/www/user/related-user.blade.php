<div>
    <?php $i = 1; ?>
    @foreach($people as $user)
    <div class="sugguest-user">
        <div class="sugguest-user-dt">
            <a href="/danimocanu"><img src="{{ Auth::user()->profile_photo_url }}" alt=""></a>
            <a href="/danimocanu" style="min-width: 130px;">
                <h4>{{$user['name']}}</h4>
                @if($user['live_in'])
                <h5>{{$user['live_in']}}</h5>
                @else
                <h5>{{$user['about_model']['user_state']}}</h5>
                @endif
            </a>
        </div>
        <button class="request-btn"><i class="fas fa-user-plus"></i></button>
    </div>
    @if($i==5)
    @break
    @endif
    <?php $i++; ?>
    @endforeach

</div>