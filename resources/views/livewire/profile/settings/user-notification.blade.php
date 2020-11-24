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
                            <div class="setting-form">
                                <form>
                                    <div class="user-data full-width">
                                        <div class="about-left-heading">
                                            <h3>Notification Setting</h3>
                                        </div>
                                        <div class="noti-sting1">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="noti-all-st">
                                                        <ul>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Message alert on screen
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                                            <label class="custom-control-label" for="customSwitch1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Activity on my posts
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                                            <label class="custom-control-label" for="customSwitch2"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Someone follows me
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                                            <label class="custom-control-label" for="customSwitch3"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Update from Goeveni
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                                                            <label class="custom-control-label" for="customSwitch4"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Hide my profile from search engine
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                                                            <label class="custom-control-label" for="customSwitch5"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
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