<x-app-layout>
    <main class="dashboard-mp">
        <livewire:www.user.auth-user.user-info />
        <div class="dash-tab-links">
            <div class="container">
                <div class="setting-page mb-20">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <div class="user-data full-width">
                                <div class="categories-left-heading">
                                    <h3>Your Details</h3>
                                </div>
                                <livewire:www.user.auth-user.settings.details-row />
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <div class="setting-form">
                                <div class="user-data full-width">
                                    <div class="about-left-heading">
                                        <h3>Deactivate Account</h3>
                                    </div>
                                    <div class="prsnl-info">
                                        @if($fb_id)
                                        <div class="mt-4 max-w-xl text-sm text-gray-600">
                                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                                        </div>
                                        <div class="mt-5">
                                            <form action="{{ route('Settings_Delete_Facebook_Account') }}" method="post">
                                                {{ csrf_field() }}
                                                <button type="submit" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-600 transition ease-in-out duration-150">
                                                    Delete Facebook Account
                                                </button>
                                            </form>
                                        </div>
                                        @else
                                        <livewire:profile.delete-user-form />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>