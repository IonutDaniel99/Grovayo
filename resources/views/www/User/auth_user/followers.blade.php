<x-app-layout>
    <main class="dashboard-mp">
        <livewire:www.user.auth-user.user-info />
        <div class="dash-tab-links">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <livewire:www.user.auth-user.tabs />
                    </div>
                </div>
                <livewire:www.user.auth-user.followers-list />
            </div>
        </div>
    </main>
</x-app-layout>