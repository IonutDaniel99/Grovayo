<x-app-layout>
    <main class="dashboard-mp">
        <livewire:profile.nav.other.user-info />
        <div class="dash-tab-links">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <livewire:profile.nav.other.tabs />
                    </div>
                </div>
                <livewire:profile.main-pages.followers-list />
            </div>
        </div>
    </main>
</x-app-layout>