<div>
    <div class="add-activity">
        <form wire:submit.prevent="activityUpload">
            <div class="activity-group">
                <div class="maine-activity-img">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->profile_photo_url }}">
                </div>
                <textarea class="add-activity-des" placeholder="What is new, John Doe?" wire:model.lazy="activityText"></textarea>
            </div>
            <div class="activity-button">
                <label for="file" class="image-input-file">
                    <div class="image-input-div">
                        <input type="file" name="activityPhotoName" id="file" style="display: none;" accept="image/*" wire:model.lazy="activityPhoto" />
                        <i class="fas fa-camera"></i>
                        <span>Add Photo</span>
                    </div>
                </label>

                <button class="act-btn-post" type="submit">Upload Activity</button>
            </div>
        </form>
    </div>
    <div class="activity-posts">
        <div class="activity-group1">
            <div class="main-user-dts1">
                <img src="images/event-view/user-1.jpg" alt="">
                <div class="user-text3">
                    <h4>John Doe</h4>
                    <span>posted an update a 5 min ago</span>
                </div>
            </div>
            <div class="dot-option dropdown">
                <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                    <a class="post-link-item" href="#">Hide</a>
                    <a class="post-link-item" href="#">Edit</a>
                    <a class="post-link-item" href="#">Delete</a>
                </div>
            </div>
        </div>
        <div class="activity-descp">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.</p>
        </div>
        <div class="like-comment-view">
            <div class="left-comments">
                <a href="#" class="like-item" title="Like">
                    <i class="fas fa-heart"></i>
                    <span><ins>Like</ins> 251</span>
                </a>
                <a href="#" class="like-item lc-left" title="Comment">
                    <i class="fas fa-comment-alt"></i>
                    <span><ins>Comment</ins> 1</span>
                </a>
            </div>
            <div class="right-comments">
                <a href="#" class="like-item" title="Share">
                    <i class="fas fa-eye"></i>
                    <span><ins>View</ins> 351</span>
                </a>
            </div>
        </div>
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
    </div>
</div>