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
                    <a class="post-link-item" href="#">Edit</a>
                    <a class="post-link-item" href="#">Delete</a>
                </div>
            </div>
        </div>
        <div class="activity-descp">
            @if($post['post_description'] != null)
            <p>{{$post['post_description']}}</p>
            @endif
            @if($post['post_content'] != null)
            <div class="user-image-container">
                <img class="user-image-bg" src="{{$post['post_content'] }}" alt="{{$post['post_content'] }}">
                <img class="user-image-front" src="{{$post['post_content'] }}" alt="{{$post['post_content'] }}">
            </div>
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
        @IF($post->comments->count() > 0)
        <div class="activity-reply">
            <div class="activity-group1">
                <div class="main-user-dts1">
                    <img src="images/event-view/user-4.jpg" alt="">
                    <div class="user-text3">
                        <h4>Rock William</h4>
                        <span>posted an update a 3 min ago</span>
                    </div>
                </div>
            </div>
            <div class="activity-descp">
                <p>Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus.</p>
                <ul>
                    <li><a href="#">Reply</a></li>
                    <li><a href="#">Report</a></li>
                    <li><a href="#">Delete</a></li>
                </ul>
            </div>
            <div class="activity-post-reply">
                <div class="areply-dp1">
                    <img src="images/event-view/user-1.jpg" alt="">
                </div>
                <form>
                    <input class="areply-post" type="text" placeholder="Write a reply">
                    <button class="areply-post-btn" type="submit">Reply</button>
                </form>
            </div>
        </div>
        @ENDIF
    </div>
    @endforeach
</div>