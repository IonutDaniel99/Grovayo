<div>
    <div id="recipeCarouselPeople" class="carousel slide w-100 multi-item-carousel" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
            <?php $i = 0; ?>
            @foreach($people as $user)
            <div class="carousel-item <?php if($i === 0) { echo 'active'; } ?>">
                <a href="/user/{{$user['username']}}">
                    <div class="user-profile" style="padding: 10px 15px 20px 15px;">
                        <div class="username-dt dpbg" style="background-image:url('{{$user['background_image_url']}}')">
                            <div class=" usr-pic">
                                @if($user['profile_photo_path']==NULL)
                                <img class="h-100 w-100" src="https://ui-avatars.com/api/?name={{$user['name']}}&amp;color=7F9CF5&amp;background=EBF4FF" alt="Ene Ionut Daniel">
                                @else
                                <img class="h-100 w-100" src="https://ui-avatars.com/api/?name={{$user['profile_photo_path']}}&amp;color=7F9CF5&amp;background=EBF4FF" alt="Ene Ionut Daniel">
                                @endif
                            </div>
                        </div>
                        <div class="user-main-details">
                            <h4>{{$user['name']}}</h4>
                            @if($user['live_in'] != NULL && $user['live_in'] != 'Actual Location')
                            <span><i class="fas fa-map-marker-alt"></i>&nbsp;{{$user['live_in']}}</span>
                            @elseif($user['about_model']['user_state'] == $user_state)
                            <span><i class="fas fa-map-marker-alt"></i>&nbsp;{{$user['about_model']['user_state']}}</span>
                            @else
                            <span><i class="fas fa-map-marker-alt"></i>&nbsp;{{$user['about_model']['user_country']}}</span>
                            @endif
                        </div>
                        <div class="profile-link">
                            <a href="/user/{{$user['username']}}">
                                <button class=" msg-btn1">View Profile</button>
                            </a>
                        </div>
                    </div>
                </a>
            </div>
            @if($i==9)
            @break
            @endif
            <?php $i++; ?>
            @endforeach
        </div>
        <ol class="carousel-indicators mx-3" style="bottom: -10px !important;">
            <?php $i = 0; ?>
            @foreach($people as $user)
            <li data-target="#recipeCarouselPeople" <?php if($i === 0) { echo 'class="active"'; } ?>data-slide-to={{$i}}></li>
            @if($i==9)
            @break
            @endif
            <?php $i++; ?>
            @endforeach
        </ol>
    </div>
</div>