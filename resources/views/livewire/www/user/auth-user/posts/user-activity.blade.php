<div>
    @foreach($user_posts as $post)
    <div class="activity-posts" wire:key="post_{{ $post['id']}}">
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
                    <a type="button" class="post-link-item" data-toggle="modal" data-target="#exampleModalCenter{{ $post['id']}}">
                        Edit
                    </a>
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
                @livewire('www.user.auth-user.posts.user-activity-comments', ['post_id' => $post['id']],key($post['id']))
                @ENDIF
            </div>
        </div>
    </div>
    <div wire:ignore.self class=" modal fade" id="exampleModalCenter{{ $post['id']}}" role="dialog" aria-labelledby="exampleModalCenterTitle{{ $post['id']}}" aria-hidden="true" wire:key="modal_{{ $post['id']}}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title">Edit post</h5>
                </div>
                <form>
                    <div class="modal-body">
                        <textarea class="add-activity-des" type="text" wire:model="activityTextEdit" placeholder="Update your post with a new content"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="areply-post-btn" data-dismiss="modal" wire:click.prevent="updateActivityText({{$post['id']}})">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    @if($amount < $postsNumber) <div class="activity-posts">
        <a id="load-more-activities" wire:click="load">Load more posts</a>
</div>
@endif
</div>