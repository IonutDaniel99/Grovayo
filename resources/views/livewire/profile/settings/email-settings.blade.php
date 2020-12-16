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
                                <div class="user-data full-width">
                                    @if ($errors->any())
                                    <div class="alert alert-danger" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="about-left-heading">
                                        <h3>Email Setting</h3>
                                    </div>
                                    <div class="prsnl-info">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <form action="{{ route('Settings_Email_Update') }} " method="post">
                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <label>Old Email Address*</label>
                                                        <input class="payment-input" type="email" name="old_email" placeholder="Enter Old Email Address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New Email Address*</label>
                                                        <input class="payment-input" type="email" name="email" placeholder="Enter New Email Address">
                                                    </div>
                                                    <div class="add-profile-btn">
                                                        <button class="setting-save-btn" type="submit">Save Changes</button>
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