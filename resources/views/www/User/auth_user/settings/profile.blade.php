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
                                @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </div>
                                @endif
                                <div class="user-data full-width">
                                    <div class="about-left-heading">
                                        <h3>Profile status</h3>
                                    </div>
                                    <div class="prsnl-info">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <form action="{{ route('Settings_Profile_Visibility') }}" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="form-group">
                                                        @if($user_about_model['is_private'] == 1)
                                                        <h6><span style="color:red"><b>Note!</b></span> Your profile is set on <b class="underline" style="color: red;">Private</b>. You can change your profile every 3 days!</h6>
                                                        @if(strtotime($user_about_model['updated_at']) < strtotime('-3 days')) <h6>While your profile is set on Private,other users can't:</h6>
                                                            <ul class="pl-4" style="list-style:disc">
                                                                <li>Follow your profile without accepting their request!</li>
                                                                <li>See your profile activity and about page!</li>
                                                                <li>View who you follow and your followers!</li>
                                                            </ul>
                                                            <div class=" add-profile-btn">
                                                                <button class="setting-save-btn inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" type="sub">Set to Public</button>
                                                            </div>
                                                            @else
                                                            <h6>Account status change button will be available after {{ gmdate("F j, Y",strtotime($user_about_model['updated_at']) + 259200)}}</h6>
                                                            @endif
                                                            @else
                                                            <h6><span style="color:red"><b>Note!</b></span> Your profile its set on <b class="underline" style="color: green;">Public</b>.You can change your profile every 3 days!</h6>
                                                            @if(strtotime($user_about_model['updated_at']) < strtotime('-3 days')) <h6>While your profile is set on Public,other users can:</h6>
                                                                <ul class="pl-4" style="list-style:disc">
                                                                    <li>Follow your profile!</li>
                                                                    <li>See your profile activity and about page!</li>
                                                                    <li>View who you follow and your followers!</li>
                                                                </ul>
                                                                <div class="add-profile-btn">
                                                                    <button class="setting-save-btn inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" type="sub">Set to Private</button>
                                                                </div>
                                                                @else
                                                                <h6>Account status change button will be available after {{ gmdate("F j, Y",strtotime($user_about_model['updated_at']) + 259200)}}</h6>
                                                                @endif
                                                                @endif
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-data full-width">
                                    <div class="about-left-heading">
                                        <h3>Profile Photo</h3>
                                    </div>
                                    <div class="prsnl-info">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <h6><span style="color:red"><b>Note!</b></span> Recommanded dimension for profile image is <b>150</b> x <b>150</b>.</h6>
                                                    <livewire:profile.update-profile-information-form />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-data full-width">
                                    <div class="about-left-heading">
                                        <h3>Background Image</h3>
                                    </div>
                                    <div class="prsnl-info">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <h6><span style="color:red"><b>Note!</b></span> Recommanded and minimum size for background image is <b>1600</b> x <b>350</b> and dimension must be lower than <b>4MB</b></h6>
                                                    <div class="setting-bg">
                                                        <img src="{{Auth::user()->background_image_url}}" alt="">
                                                    </div>
                                                    <div class="setting-upload">
                                                        <div class="addpic" id="OpenImgUpload">
                                                            <form action="{{ route('Settings_Profile_Background_Photo') }}" method="post" enctype="multipart/form-data">
                                                                {{ csrf_field() }}
                                                                <label class=" inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150" for="myfile">SELECT A NEW BACKGROUND</label>
                                                                <input type="file" id="myfile" name="background_image">
                                                                <div wire:loading wire:target="photo">Uploading...</div>

                                                                <div class="add-profile-btn">
                                                                    <button class="setting-save-btn inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150" type="sub">SAVE</button>
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
                </div>
            </div>
        </div>
    </main>
</x-app-layout>