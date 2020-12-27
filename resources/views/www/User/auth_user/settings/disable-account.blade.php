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
                                <form>
                                    <div class="user-data full-width">
                                        <div class="about-left-heading">
                                            <h3>Deactivate Account</h3>
                                        </div>
                                        <div class="prsnl-info">
                                            @livewire('profile.delete-user-form')
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>