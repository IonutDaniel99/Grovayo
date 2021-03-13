<x-app-layout>
    <main class="dashboard-mp">
        <div class="dash-todo-thumbnail-area1">
            <div class="todo-thumb1 dash-bg-image1 dash-bg-overlay" style="background-image:url(/{{$user_model->background_image_url}})"> </div>
            <div class="dash-todo-header1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="my-profile-dash">
                                <div class="my-dp-dash">
                                    @if($user_model->profile_photo_path == NULL)
                                    <img src="https://ui-avatars.com/api/?name={{$user_model->name}}&color=7F9CF5&background=EBF4FF" alt="{{ $user_model->name }}">
                                    @else
                                    <img src="/{{ $user_model->profile_photo_path }}" alt="{{$user_model->name}}">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <livewire:www.user.view-user.view-user-info :username='$username' />
        <livewire:www.user.view-user.followers-content :username='$username' />
    </main>
</x-app-layout>