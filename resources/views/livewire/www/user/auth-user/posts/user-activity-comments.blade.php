<div>
    @foreach($activityComments as $comment)
    <div class="activity-group1 py-1 comment mb-2" wire:key="comment_{{ $comment['id']}}">
        <div class="main-user-dts1 align-items-center">
            <a href="/user/{{$comment['user']['username']}}" style="display: contents;">
                @if($comment['user']['profile_photo_path']==NULL)
                <img src="https://ui-avatars.com/api/?name={{$comment['user']['name']}}&amp;color=7F9CF5&amp;background=EBF4FF" alt="={{$comment['user']['name']}}">
                @else
                <img src="{{$comment['user']['profile_photo_path']}}" alt="{{$comment['user']['profile_photo_path']}}">
                @endif
                <div class="user-text3 text-break">
                    <h4>{{$comment['user']['name']}} <span>{{$comment['created_at']->diffForHumans()}}</span> </h4>
                    <p class="comment-paragraph">{{$comment['comment_content']}}</p>
                </div>
            </a>
        </div>
        <div class="dot-option dropdown">
            <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
            <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                @if($comment['user_id'] === Auth::id())
                <a type="button" class="post-link-item" data-toggle="modal" data-target=".commentEdit_{{ $comment['id']}}">Edit</a>
                @endif
                <a class="post-link-item" wire:click="deleteComment({{$comment['id']}})">Delete</a>
            </div>
        </div>
    </div>
    @if($comment['user_id'] === Auth::id())
    <div wire:ignore.self class="animate__animated animate__fadeIn modal commentEdit_{{ $comment['id']}}" role="dialog" aria-hidden="true" wire:key="modalComment_{{ $comment['id']}}">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title">Edit comment</h5>
                </div>
                <form>
                    <div class="modal-body">
                        <textarea class="add-activity-des" type="text" wire:model="activityCommentToEdit" placeholder="Update your comment with a new content"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="areply-post-btn" data-dismiss="modal" wire:click.prevent="editActivityComment({{$comment['id']}})">Update</button>
                    </div>
                    @error('activityCommentToEdit')
                    <script>
                        toastr.error('Edit comment input can`t be empty.')
                    </script>
                    @enderror
                </form>
            </div>
        </div>
    </div>
    @endif
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