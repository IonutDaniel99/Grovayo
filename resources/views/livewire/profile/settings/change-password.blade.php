<x-app-layout>
    <main class="dashboard-mp">
        @livewire('nav.profile.user-info')
        <div class="dash-tab-links">
            <div class="container">
                <div class="setting-page mb-20">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <div class="user-data full-width">
                                <div class="categories-left-heading">
                                    <h3>Your Details</h3>
                                </div>
                                @livewire('nav.settings.details-row')
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </div>
                            @endif
                            <div class="setting-form">
                                <div class="user-data full-width">
                                    <div class="about-left-heading">
                                        <h3>Change Password</h3>
                                    </div>
                                    <div class="prsnl-info" style="padding-top:30px">
                                        <div class="md:grid md:grid-cols-1 md:gap-6">
                                            <div class="overflow-hidden sm:rounded-md">
                                                <form method="POST" action="{{ route('Settings_Change_Password_Update') }}">
                                                    {{ csrf_field() }}
                                                    <div class="px-1 py-0 bg-white sm:p-6">
                                                        <div class="grid grid-cols-6 gap-6">
                                                            <div class="col-span-6 sm:col-span-4">
                                                                <label class="block font-medium text-sm text-gray-700" for="current_password">Current Password</label>
                                                                <input id="current_password" type="password" name="old_password" class="mt-1 block w-full form-input rounded-md shadow-sm" autocomplete="current-password" required>
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-4">
                                                                <label class="block font-medium text-sm text-gray-700" for="password">New Password</label>
                                                                <input id="password" type="password" name="password" class="mt-1 block w-full form-input rounded-md shadow-sm" autocomplete="new-password" required>
                                                            </div>

                                                            <div class="col-span-6 sm:col-span-4">
                                                                <label class="block font-medium text-sm text-gray-700" for="password_confirmation">Confirm Password</label>
                                                                <input id="password_confirmation" type="password" name="password_confirmation" class="mt-1 block w-full form-input rounded-md shadow-sm" autocomplete="new-password" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="submit" value="Update" class="setting-save-btn inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" />
                                                </form>
                                            </div>
                                        </div>
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