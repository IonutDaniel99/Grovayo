<div>
    @if($user_posts->count() > 0)
    @foreach($user_posts as $post)
    <div class="activity-posts animate__animated animate__fadeIn" wire:key="post_{{ $post['id']}}">
        <div class="activity-group1 ">
            <div class="main-user-dts1">
                <img src="{{ $user_model->profile_photo_url }}" alt="{{ $user_model->profile_photo_url }}">
                <div class="user-text3">
                    <h4>{{$user_model['name']}}</h4>
                    <span>{{$post['created_at']->diffForHumans()}}</span>
                </div>
            </div>
        </div>
        <div class="activity-descp">
            @if($post['post_description'] != null && $post['post_content'] == null)
            <div class="post-description">
                <p>{{$post['post_description']}}</p>
            </div>
            @else
            <div class="post-description" style="border-bottom: 1px solid #e6e6e6;">
                <p>{{$post['post_description']}}</p>
            </div>
            @if($post['post_description'] != null)
            <div class="user-image-container">
                <img class="user-image-bg" src="/{{$post['post_content'] }}" alt="{{$post['post_content'] }}">
                <img class="user-image-front" src="/{{$post['post_content'] }}" alt="{{$post['post_content'] }}">
            </div>
            @else
            <div class="user-image-container">
                <img class="user-image-bg top-45" src="/{{$post['post_content'] }}" alt="{{$post['post_content'] }}">
                <img class="user-image-front" src="/{{$post['post_content'] }}" alt="{{$post['post_content'] }}">
            </div>
            @endif
            @endif
        </div>
        <div class="like-comment-view">
            <div class="left-comments">
                @livewire('www.user.auth-user.posts.user-activity-likes',['post_id' => $post['id']], key(time() . $post['id']))
                <span class="like-item lc-left" title="Comment">
                    <i class="fas fa-comment-alt"></i>
                    <span><ins>Comment</ins> {{$post->comments->count()}}</span>
                </span>
            </div>
        </div>
        <div class="activity-reply">
            <div class="activity-post-reply">
                <div class="areply-dp1">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->profile_photo_url }}">
                </div>
                <form wire:submit.prevent="replayUpload({{$post['id']}})" class="d-flex align-items-center justify-content-between">
                    <input class=" areply-post" type="text" placeholder="Write a reply" wire:model.debounce.250ms="replayText" require>
                    @error('replayText')
                    <div class="categories-left-heading" x-data="{tooltip_comment_activity_error:false}" style="text-align: left;padding:0px 0px 0px 40px; width:0%">
                        <div @mouseenter="tooltip_comment_activity_error = true" @mouseleave="tooltip_comment_activity_error = false">
                            <i class="fas fa-remove-format info-button pt-1  pulsate-fwd" style="padding:0px !important"></i>
                        </div>
                        <div class="relative" x-cloak x-show.transition.origin.top="tooltip_comment_activity_error" style="display:block !important">
                            <div class="text-center absolute z-10 w300px p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-40 -translate-y-12 bg-orange-500 rounded-lg shadow-lg">
                                {{ $message }}
                            </div>
                        </div>
                    </div>
                    @enderror
                    <button class="areply-post-btn" type="submit">Reply</button>
                </form>
            </div>
            <div id="comments-div-scroll">
                @IF($post->comments->count() > 0)
                @livewire('www.user.view-user.posts.view-user-activity-comments', ['post_id' => $post['id'], 'user_id'=> $user_model['id']],key($post['id']))
                @ENDIF
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="activity-posts animate__animated animate__fadeIn">
        <div class="activity-group-no-posts">
            <img src="{{ $user_model->profile_photo_url }}" alt="{{ $user_model->profile_photo_url }}">
            <div class="user-text3">
                <h3>{{$user_model['name']}}</h3>
                <h4>Joined {{date_format($user_model['created_at'],"F j, Y")}}</h4>
            </div>
        </div>
    </div>
    @endif
</div>