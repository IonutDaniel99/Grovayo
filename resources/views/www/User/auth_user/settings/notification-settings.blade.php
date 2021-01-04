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
                                        <h3>Notification Setting</h3>
                                    </div>
                                    <div class="noti-sting1">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="noti-all-st">
                                                    <ul>
                                                        <form action="{{ route('Settings_User_Notification_Update') }}" method="post">
                                                            @csrf
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Recieve Email when someone follow you!
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input class="custom-control-input" id="customSwitch1" type="checkbox" name="email_follow" @if($user_model->email_follow) checked=checked @endif>
                                                                            <label class="custom-control-label" for="customSwitch1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Recieve Email when someone like your posts!
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input class="custom-control-input" type="checkbox" id="customSwitch2" name="email_like" @if($user_model->email_like) checked=checked @endif>
                                                                            <label class="custom-control-label" for="customSwitch2"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Recieve Email when someone comment to your posts!
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input class="custom-control-input" type="checkbox" id="customSwitch3" name="email_comment" @if($user_model->email_comment) checked=checked @endif>
                                                                            <label class="custom-control-label" for="customSwitch3"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Recieve Email from {{ config('app.name')}} when website made changes!
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input class="custom-control-input" type="checkbox" id="customSwitch4" name="email_update" @if($user_model->email_update) checked=checked @endif>
                                                                            <label class="custom-control-label" for="customSwitch4"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Recieve Email from {{ config('app.name')}} about marketing and selling products!
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input class="custom-control-input" type="checkbox" id="customSwitch5" name="email_marketing" @if($user_model->email_marketing) checked=checked @endif>
                                                                            <label class="custom-control-label" for="customSwitch5"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Hide my profile from website search engine!
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input class="custom-control-input" type="checkbox" id="customSwitch6" name="hide_profile" @if($user_model->hide_profile) checked=checked @endif>
                                                                            <label class="custom-control-label" for="customSwitch6"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Hide ads from pages!
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input class="custom-control-input" type="checkbox" id="customSwitch7" name="hide_ads" @if($user_model->hide_ads) checked=checked @endif>
                                                                            <label class="custom-control-label" for="customSwitch7"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="noti-st">
                                                                    <div class="noti-left-t">
                                                                        Hide alerts,popup toaster and sounds from webpage!
                                                                    </div>
                                                                    <div class="noti-right-b">
                                                                        <div class="custom-control custom-switch">
                                                                            <input class="custom-control-input" type="checkbox" id="customSwitch8" name="hide_alerts" @if($user_model->hide_alerts) checked=checked @endif>
                                                                            <label class="custom-control-label" for="customSwitch8"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <button class="setting-save-btn" type="submit" style="float: right; margin: 10px">Save Changes</button>
                                                        </form>
                                                    </ul>
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
        </div>
    </main>
</x-app-layout>