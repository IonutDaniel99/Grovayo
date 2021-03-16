<div>
    @foreach($user_posts as $post)
    <div class="activity-posts">
        <div class="activity-group1">
            <div class="main-user-dts1">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->profile_photo_url }}">
                <div class="user-text3">
                    <h4>{{$user_model['name']}}</h4>
                    <span>{{$post['created_at']->diffForHumans()}}</span>
                </div>
            </div>
            <div class="dot-option dropdown">
                <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                    @if($post['post_description'] != null)
                    <a class="post-link-item" href="#">Edit</a>
                    @endif
                    <a class="post-link-item" wire:click="deleteActivity({{$post['id']}})">Delete</a>
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
                <img class="user-image-bg" src="{{$post['post_content'] }}" alt="{{$post['post_content'] }}">
                <img class="user-image-front" src="{{$post['post_content'] }}" alt="{{$post['post_content'] }}">
            </div>
            @else
            <div class="user-image-container">
                <img class="user-image-bg top-45" src="{{$post['post_content'] }}" alt="{{$post['post_content'] }}">
                <img class="user-image-front" src="{{$post['post_content'] }}" alt="{{$post['post_content'] }}">
            </div>
            @endif
            @endif
        </div>
        <div class="like-comment-view">
            <div class="left-comments">
                <a href="#" class="like-item" title="Like">
                    <i class="fas fa-heart"></i>
                    <span><ins>Like</ins> {{$post['post_likes']}}</span>
                </a>
                <a href="#" class="like-item lc-left" title="Comment">
                    <i class="fas fa-comment-alt"></i>
                    <span><ins>Comment</ins> {{$post->comments->count()}}</span>
                </a>
            </div>

        </div>
        <div class="activity-reply">
            <div class="activity-post-reply">
                <div class="areply-dp1">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->profile_photo_url }}">
                </div>
                <form wire:submit.prevent="replayUpload({{$post['id']}})">
                    <input class="areply-post" type="text" placeholder="Write a reply" wire:model.lazy="replayText">
                    <button class="areply-post-btn" type="submit">Reply</button>
                </form>
            </div>
            @IF($post->comments->count() > 0)
            @livewire('www.user.auth-user.posts.user-activity-comments', ['post_id' => $post['id']])
            @ENDIF
        </div>
    </div>
    @endforeach
</div>