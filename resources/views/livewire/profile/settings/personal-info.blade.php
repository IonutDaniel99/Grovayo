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
                                <form action="{{ route('Settings_Personal_Info_Update') }}" method="post">
                                    {{ csrf_field() }}
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
                                            <h3>Personal Info</h3>
                                        </div>
                                        <div class="prsnl-info">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Full Name*</label>
                                                        <input class="payment-input" name="full_name" type="text" value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <input class="payment-input datepicker-here" name="birthday" value="{{ $user_about['birthday']  }}" data-language="en" type="text" placeholder="{{ $user_about['birthday'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Contact Email</label>
                                                        <input class="payment-input" type="contact_email" value="{{ $user_about['contact_email'] }}" name="contact_email" placeholder="{{ $user_about['contact_email'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Phone Number</label>
                                                        <input class="payment-input" type="tel" value="{{ $user_about['phone_number']  }}" name="phone_number" placeholder="{{ $user_about['phone_number'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Gender*</label>
                                                        <div class="select-bg">
                                                            <select class="nice-select wide" name="gender">
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                                <option>Unspecified</option>
                                                                <option>Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group">
                                                        <label>Status*</label>
                                                        <div class="select-bg">
                                                            <select class="nice-select wide" name="status">
                                                                <option>Single</option>
                                                                <option>Married</option>
                                                                <option>In a relationship</option>
                                                                <option>Engaged</option>
                                                                <option>Divorced</option>
                                                                <option>It's complicated</option>
                                                                <option>Widowed</option>
                                                                <option>Not specified</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <label>Country*</label>
                                                        <div class="select-bg">
                                                            <select class="nice-select wide" id="country-dropdown" name="country">
                                                                <option>Select Country</option>

                                                                @foreach ($data['countries'] as $country)
                                                                <option value="{{$country->id}}">
                                                                    {{$country->name}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <div class="select-bg">
                                                            <select class="nice-select wide" id="state-dropdown" name="state">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-12">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <div class="select-bg">
                                                            <select class="nice-select wide" id="city-dropdown" name="city">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-center mt-3"><span style="color:red"><b>Note!</b> </span><b>Date of Birth</b> , <b>Contact Email</b> and <b>Phone Number</b> <br>can be deleted by leaving the input empty.<br> Input box which contain <b>*</b> are mandatory!</h6>
                                        </div>

                                    </div>
                                    <div class="user-data full-width">
                                        <div class="about-left-heading">
                                            <h3>About Description</h3>
                                        </div>
                                        <div class="prsnl-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Description Here</label>
                                                        <textarea class="replt-comnt" name="description" placeholder="{{ $user_about['about'] }}"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-data full-width">
                                        <div class="about-left-heading">
                                            <h3>Hobbies</h3>
                                        </div>
                                        <div class="prsnl-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Favourite Music Genre</label>
                                                        <input class="payment-input" type="text" name="favourite_music_genre" placeholder="{{ $user_about['favourite_music_genre'] }}" value="{{ $user_about['favourite_music_genre'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Favourite Books</label>
                                                        <input class="payment-input" type="text" name="favourite_books" placeholder="{{ $user_about['favourite_books'] }}" value="{{ $user_about['favourite_books'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Favourite Music Artist</label>
                                                        <input class="payment-input" type="text" name="favourite_music" placeholder="{{ $user_about['favourite_music'] }}" value="{{ $user_about['favourite_music'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Favourite Movies</label>
                                                        <input class="payment-input" type="text" name="favourite_movies" placeholder="{{ $user_about['favourite_movies'] }}" value="{{ $user_about['favourite_movies'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Favourite Games</label>
                                                        <input class="payment-input" type="text" name="favourite_games" placeholder="{{ $user_about['favourite_games'] }}" value="{{ $user_about['favourite_games'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Favourite Brands</label>
                                                        <input class="payment-input" type="text" name="favourite_brands" placeholder="{{ $user_about['favourite_brands'] }}" value="{{ $user_about['favourite_brands'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Favourite Artists</label>
                                                        <input class="payment-input" type="text" name="favourite_artists" placeholder="{{ $user_about['favourite_artists'] }}" value="{{ $user_about['favourite_artists'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Other Insterests</label>
                                                        <input class="payment-input" type="text" name="favourite_interests" placeholder="{{ $user_about['favourite_interests'] }}" value="{{ $user_about['favourite_interests'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-center mt-3"><span style="color:red"><b>Note!</b> </span><b>All inputs above</b> can be deleted by leaving the input empty.</h6>
                                        </div>
                                    </div>
                                    <div class="user-data full-width">
                                        <div class="about-left-heading">
                                            <h3>Last Education / Current Education</h3>
                                        </div>
                                        <div class="prsnl-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Title*</label>
                                                        <input class="payment-input" type="text" name="education_title" placeholder="Collage Title" value="{{ $user_about['education_title'] }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5">
                                                    <div class="form-group">
                                                        <input class="payment-input datepicker-here" data-min-view="months" data-view="months" value="{{$user_about['education_date_start']}}" data-date-format="mm-yyyy" type="text" data-language="en" name="education_date_start" placeholder="From">
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5">
                                                    <div class="form-group">
                                                        <input id="education_present_date" class="payment-input datepicker-here" value="{{$user_about['education_date_end']}}" data-min-view="months" data-view="months" data-date-format="mm-yyyy" type="text" data-language="en" name="education_date_end" placeholder="to">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <div class="form-group pt-2">
                                                        <label class="checkbox">
                                                            <span class="checkbox__input pt-1">
                                                                <input type="checkbox" id="education_present_checkbox">
                                                                <span class="checkbox__control">
                                                                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden="true" focusable="false">
                                                                        <path fill='none' stroke='currentColor' stroke-width='3' d='M1.73 12.91l6.37 6.37L22.79 4.59' /></svg>
                                                                </span>
                                                            </span>
                                                            <span class="radio__label">Present</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <input class="payment-input" type="text" name="education_institute" placeholder="www.collage/institute.com" value="{{$user_about['education_institute']}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-center mt-3"><span style="color:red"><b>Note!</b> </span>If <b>Title</b> is empty. Education form will be hidden on profile page!</h6>
                                        </div>
                                    </div>
                                    <div class="user-data full-width">
                                        <div class="about-left-heading">
                                            <h3>Employment</h3>
                                        </div>
                                        <div class="prsnl-info">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <label>Title*</label>
                                                        <input class="payment-input" type="text" name="employment_title" placeholder="Company Title" value="{{$user_about['employment_title']}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5">
                                                    <div class="form-group">
                                                        <input class="payment-input datepicker-here" value="{{$user_about['employment_date_start']}}" data-min-view="months" data-view="months" data-date-format="mm-yyyy" type="text" data-language="en" name="employment_date_start" placeholder="From">
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-5">
                                                    <div class="form-group">
                                                        <input id="employee_present_date" class="payment-input datepicker-here" value="{{$user_about['employment_date_end']}}" data-min-view="months" data-view="months" data-date-format="mm-yyyy" type="text" data-language="en" name="employment_date_end" placeholder="to">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <div class="form-group pt-2">
                                                        <label class="checkbox">
                                                            <span class="checkbox__input pt-1">
                                                                <input type="checkbox" id="employee_present_checkbox">
                                                                <span class="checkbox__control">
                                                                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' aria-hidden="true" focusable="false">
                                                                        <path fill='none' stroke='currentColor' stroke-width='3' d='M1.73 12.91l6.37 6.37L22.79 4.59' /></svg>
                                                                </span>
                                                            </span>
                                                            <span class="radio__label">Present</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group">
                                                        <input class="payment-input" type="text" name="employment_company" placeholder="www.company.com" value="{{$user_about['employment_company']}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="text-center mt-3"><span style="color:red"><b>Note!</b> </span>If <b>Title</b> is empty. Employment form will be hidden on profile page!</h6>
                                        </div>
                                    </div>
                                    <div class="add-crdt-amnt">
                                        <button class="setting-save-btn" type="submit">Save Changes</button>
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