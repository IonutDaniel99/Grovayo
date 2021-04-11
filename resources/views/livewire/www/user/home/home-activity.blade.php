<div>
    @foreach ($all_posts as $post)
        @livewire('www.user.home.home-users-activity', ['post' => $post], key($post->id))
    @endforeach
</div>