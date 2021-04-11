<div>
    @if($all_posts)
    @foreach ($all_posts as $post)
        @livewire('www.user.home.home-users-activity', ['post' => $post], key($post->id))
    @endforeach
    @else
    <div class="activity-posts mt-3 animate__animated animate__fadeIn">
        <div class="activity-group-no-posts">
            <div class="user-text3" style="padding: 0px">
                <h3 style="color: #847577; font-size: 1.5rem">At this moment you didn't followed someone or they dont have any activity yet!</h3>
            </div>
        </div>
    </div>
    @endif
</div>