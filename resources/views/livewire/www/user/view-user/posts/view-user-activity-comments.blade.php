<div>
    @foreach($activityComments as $comment)
    <div class="activity-group1 py-1 comment" wire:key="comment_{{ $comment['id']}}">
        <div class="main-user-dts1 align-items-center">
            <a href="/user/{{$comment['user']['username']}}" style="display: contents;">
                @if($comment['user']['profile_photo_path']==NULL)
                <img src="https://ui-avatars.com/api/?name={{$comment['user']['name']}}&amp;color=7F9CF5&amp;background=EBF4FF" alt="={{$comment['user']['name']}}">
                @else
                <img src="/{{$comment['user']['profile_photo_path']}}" alt="{{$comment['user']['profile_photo_path']}}">
                @endif
                <div class="user-text3 text-break">
                    <h4>{{$comment['user']['name']}} <span>{{$comment['created_at']->diffForHumans()}}</span> </h4>
                    <p class="comment-paragraph">{{$comment['comment_content']}}</p>
                </div>
            </a>
        </div>
        @if($comment['user_id'] === Auth::id())
        <div class="dot-option dropdown">
            <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
            <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                <a class="post-link-item" wire:click="editComment({{$comment['id']}})">Edit</a>
                <a class="post-link-item" wire:click="deleteComment({{$comment['id']}})">Delete</a>
            </div>
        </div>
        @endif
    </div>
    @endforeach
    @if($amount < $commentsNumber) <a id="load-more-comments" wire:click="load">Load more</a>
        <div wire:loading wire:target="load" class="main-loader pb-2">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
        @endif
</div>