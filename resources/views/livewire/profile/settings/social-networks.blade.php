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
                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                                <h6><span style="color:red"><b>Note!</b></span> All links must start with <b>http://</b> or <b>https://</b>.</h6>
                            </div>
                            @endif
                            <div class="setting-form">
                                <div class="user-data full-width">
                                    <div class="about-left-heading">
                                        <h3>Social Networks</h3>
                                    </div>
                                    <div class="prsnl-info">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <form action="{{ route('Settings_Social_Networks_Update') }}" method="post">
                                                    {{csrf_field()}}
                                                    <div class="form-group scl-icn" data-toggle="tooltip" title="Write here your personal webpage,blog page or anything else which is not in the list!">
                                                        <input class="social-input" type="text" name="social_webpage" placeholder="{{$user_about['social_webpage']}}" value="{{$user_about['social_webpage']}}">
                                                        <div class="scl-icn1 scl-bg-0"><i class="fab fa-internet-explorer"></i></div>
                                                    </div>
                                                    <div class="form-group scl-icn">
                                                        <input class="social-input" type="text" name="social_facebook" placeholder="{{$user_about['social_facebook']}}" value="{{$user_about['social_facebook']}}">
                                                        <div class=" scl-icn1 scl-bg-1"><i class="fab fa-facebook-f"></i></div>
                                                    </div>
                                                    <div class="form-group scl-icn">
                                                        <input class="social-input" type="text" name="social_twitter" placeholder="{{$user_about['social_twitter']}}" value="{{$user_about['social_twitter']}}">
                                                        <div class="scl-icn1 scl-bg-2"><i class="fab fa-twitter"></i></div>
                                                    </div>
                                                    <div class="form-group scl-icn">
                                                        <input class="social-input" type="text" name="social_instagram" placeholder="{{$user_about['social_instagram']}}" value="{{$user_about['social_instagram']}}">
                                                        <div class="scl-icn1 scl-bg-4"><i class="fab fa-instagram"></i></div>
                                                    </div>
                                                    <div class="form-group scl-icn">
                                                        <input class="social-input" type="text" name="social_linkedin" placeholder="{{$user_about['social_linkedin']}}" value="{{$user_about['social_linkedin']}}">
                                                        <div class="scl-icn1 scl-bg-6"><i class="fab fa-linkedin-in"></i></div>
                                                    </div>
                                                    <div class="form-group scl-icn">
                                                        <input class="social-input" type="text" name="social_youtube" placeholder="{{$user_about['social_youtube']}}" value="{{$user_about['social_youtube']}}">
                                                        <div class="scl-icn1 scl-bg-7"><i class="fab fa-youtube"></i></div>
                                                    </div>
                                                    <div class=" form-group scl-icn">
                                                        <input class="social-input" type="text" name="social_other1" placeholder="{{$user_about['social_other1']}}" value="{{$user_about['social_other1']}}">
                                                        <div class="scl-icn1 scl-bg-6"><i class="fas fa-globe"></i></div>
                                                    </div>
                                                    <div class="form-group scl-icn">
                                                        <input class="social-input" type="text" name="social_other2" placeholder="{{$user_about['social_other2']}}" value="{{$user_about['social_other2']}}">
                                                        <div class="scl-icn1 scl-bg-7"><i class="fas fa-globe"></i></div>
                                                    </div>
                                                    <div class="add-profile-btn">
                                                        <h6><span style="color:red"><b>Note!</b></span> All links must start with <b>http://</b> or <b>https://</b>.</h6>
                                                        <h6><span style="color:red"><b>Note!</b> </span><b>All inputs above</b> can be deleted by leaving the input empty.</h6>

                                                        <input class="setting-save-btn" type="submit" value="Save Changes"></input>
                                                    </div>
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