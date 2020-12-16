<x-app-layout>
    <main class="dashboard-mp">
        <livewire:profile.nav.other.user-info />
        <div class="dash-tab-links">
            <div class="container">
                <div class="setting-page mb-20">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <div class="user-data full-width">
                                <div class="categories-left-heading">
                                    <h3>Your Details</h3>
                                </div>
                                <livewire:profile.nav.settings.details-row />
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-7">
                            <div class="setting-form">
                                <div class="user-data full-width mb-0">
                                    <div class="about-left-heading">
                                        <h3>Security and Connectivity</h3>
                                    </div>
                                    <div class="all-rqusts1 px-4 pb-5">
                                        @livewire('profile.logout-other-browser-sessions-form')
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