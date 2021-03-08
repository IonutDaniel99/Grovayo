<x-app-layout>
    <main class="dashboard-mp">
        <livewire:www.user.auth-user.user-info />
        <div class="dash-tab-links">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <livewire:www.user.auth-user.tabs />
                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="user-data full-width">
                            <div class="about-left-heading">
                                <h3>Personal Info</h3>
                                <a href="{{ route('Settings_Personal_Info_Index') }}">Edit</a>
                            </div>
                            <ul class="about-dt-items">
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Member Since
                                        </div>
                                        <div class="about-2">
                                            {{date_format($user_about['created_at'],"F Y")}}
                                        </div>
                                    </div>
                                </li>
                                <!-- TODO -->
                                @IF($user_about['user_country'] != NULL)
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Lives in
                                        </div>
                                        <div class="about-2">
                                            {{$user_about['user_country']}}
                                        </div>
                                    </div>
                                </li>
                                @ELSE
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Lives in
                                        </div>
                                        <div class="about-2">
                                            Not Specified
                                        </div>
                                    </div>
                                </li>
                                @ENDIF
                                @IF($user_about['birthday'] != NULL)
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Birthday
                                        </div>
                                        <div class="about-2">
                                            {{$user_about['birthday']}}
                                        </div>
                                    </div>
                                </li>
                                @ENDIF
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Gender
                                        </div>
                                        <div class="about-2">
                                            {{$user_about['gender']}}
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Status
                                        </div>
                                        <div class="about-2">
                                            {{$user_about['status']}}
                                        </div>
                                    </div>
                                </li>
                                @IF($user_about['contact_email'] != NULL)
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Contact Email
                                        </div>
                                        <div class="about-2">
                                            {{$user_about['contact_email']}}
                                        </div>
                                    </div>
                                </li>
                                @ENDIF
                                @IF($user_about['phone_number'] != NULL)
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Phone No.
                                        </div>
                                        <div class="about-2">
                                            {{$user_about['phone_number']}}
                                        </div>
                                    </div>
                                </li>
                                @ENDIF
                            </ul>
                        </div>
                        <div class="user-data full-width">
                            @IF($user_about['isSocialNetworksNull'] == 1)
                            <div class="about-left-heading">
                                <h3>Social Accounts</h3>
                                <a href="{{ route('Settings_Social_Networks_Index') }}">Edit</a>
                            </div>
                            <div class="categories-items">
                                @IF($user_about['social_webpage'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_webpage']}}"><i class="fas fa-globe" style="color:#51a5fb;"></i>{{$user_about['social_webpage']}}</a>
                                @ENDIF
                                @IF($user_about['social_facebook'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_facebook']}}"><i class="fab fa-facebook-square" style="color:#3b5998;"></i>{{$user_about['social_facebook']}}</a>
                                @ENDIF
                                @IF($user_about['social_twitter'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_twitter']}}"><i class="fab fa-twitter" style="color:#1da1f2;"></i>{{$user_about['social_twitter']}}</a>
                                @ENDIF
                                @IF($user_about['social_youtube'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_youtube']}}"><i class="fab fa-google-plus" style="color:#dd4b39;"></i>{{$user_about['social_youtube']}}</a>
                                @ENDIF
                                @IF($user_about['social_instagram'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_instagram']}}"><i class="fab fa-instagram" style="color:#405de6;"></i>{{$user_about['social_instagram']}}</a>
                                @ENDIF
                                @IF($user_about['social_linkedin'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_linkedin']}}"><i class="fab fa-pinterest" style="color:#bd081c;"></i>{{$user_about['social_linkedin']}}</a>
                                @ENDIF
                                @IF($user_about['social_other1'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_other1']}}"><i class="fab fa-linkedin" style="color:#0077b5;"></i>{{$user_about['social_other1']}}</a>
                                @ENDIF
                                @IF($user_about['social_other2'] != NULL)
                                <a class="category-social-item" href="{{$user_about['social_other2']}}"><i class="fab fa-youtube" style="color:#ff0000;"></i>{{$user_about['social_other2']}}</a>
                                @ENDIF
                            </div>
                            @ENDIF
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="user-data full-width">
                            <div class="about-left-heading">
                                <h6><span style="color:red"><b>Note!</b></span> This is a preview on how others sees your About page!</h6>
                            </div>
                        </div>

                        <div class="user-data full-width">
                            <div class="about-left-heading">
                                <h3>About</h3>
                                <a href="{{ route('Settings_Personal_Info_Index') }}">Edit</a>
                            </div>
                            @IF($user_about['about'] != NULL)
                            <div class="about-dt-des">
                                <p>{{$user_about['about']}}</p>
                            </div>
                            @ENDIF
                        </div>
                        <div class="user-data full-width">
                            <div class="about-left-heading">
                                <h3>Hobbies</h3>
                                <a href="{{ route('Settings_Personal_Info_Index') }}">Edit</a>
                            </div>
                            @IF($user_about['isFavouritesNull'] == 1)
                            <div class="about-hobbies">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        @IF($user_about['favourite_music_genre'] != NULL)
                                        <div class="all-hobbies">
                                            <h6>Favourite Music Genre</h6>
                                            <span>{{$user_about['favourite_music_genre']}}</span>
                                        </div>
                                        @ENDIF
                                        @IF($user_about['favourite_books'] != NULL)
                                        <div class="all-hobbies">
                                            <h6>Favourite Books</h6>
                                            <span>{{$user_about['favourite_books']}}</span>
                                        </div>
                                        @ENDIF
                                        @IF($user_about['favourite_music'] != NULL)
                                        <div class="all-hobbies">
                                            <h6>Favourite Music</h6>
                                            <span>{{$user_about['favourite_music']}}</span>
                                        </div>
                                        @ENDIF
                                        @IF($user_about['favourite_movies'] != NULL)
                                        <div class="all-hobbies">
                                            <h6>Favourite Movies</h6>
                                            <span>{{$user_about['favourite_movies']}}</span>
                                        </div>
                                        @ENDIF
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        @IF($user_about['favourite_games'] != NULL)
                                        <div class="all-hobbies">
                                            <h6>Favourite Games</h6>
                                            <span>{{$user_about['favourite_games']}}</span>
                                        </div>
                                        @ENDIF
                                        @IF($user_about['favourite_brands'] != NULL)
                                        <div class="all-hobbies">
                                            <h6>Favourite Brands</h6>
                                            <span>{{$user_about['favourite_brands']}}</span>
                                        </div>
                                        @ENDIF
                                        @IF($user_about['favourite_artists'] != NULL)
                                        <div class="all-hobbies">
                                            <h6>Favourite Artists</h6>
                                            <span>{{$user_about['favourite_artists']}}</span>
                                        </div>
                                        @ENDIF
                                        @IF($user_about['favourite_interests'] != NULL)
                                        <div class="all-hobbies">
                                            <h6>Other Interests</h6>
                                            <span>{{$user_about['favourite_interests']}}</span>
                                        </div>
                                        @ENDIF
                                    </div>
                                </div>
                            </div>
                            @ENDIF
                        </div>
                        <div class="edu-emp-items">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="user-data full-width mb-20">
                                        <div class="about-left-heading">
                                            <h3>Education</h3>
                                            <a href="{{ route('Settings_Personal_Info_Index') }}">Edit</a>
                                        </div>
                                        @IF($user_about['education_title'] != NULL)
                                        <div class="about-hobbies">
                                            <div class="all-hobbies">
                                                <h6>{{$user_about['education_title']}}</h6>
                                                <span>{{$user_about['education_date_start']}} - {{$user_about['education_date_end']}}</span>
                                                <a href="{{$user_about['education_institute']}}">{{$user_about['education_institute']}}</a>
                                            </div>
                                        </div>
                                        @ENDIF
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="user-data full-width mb-20">
                                        <div class="about-left-heading">
                                            <h3>Eployment</h3>
                                            <a href="{{ route('Settings_Personal_Info_Index') }}">Edit</a>
                                        </div>
                                        @IF($user_about['employment_title'] != NULL)
                                        <div class="about-hobbies">
                                            <div class="all-hobbies">
                                                <h6>{{$user_about['employment_title']}}</h6>
                                                <span>{{$user_about['employment_date_start']}} - {{$user_about['employment_date_end']}}</span>
                                                <a href="{{$user_about['employment_company']}}">{{$user_about['employment_company']}}</a>
                                            </div>
                                        </div>
                                        @ENDIF
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