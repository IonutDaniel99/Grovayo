<div>
    @if($is_private == 0)
    <div class="dash-tab-links">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <livewire:www.user.view-user.tabs :username='$username' />
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="user-data full-width">
                        <div class="about-left-heading">
                            <h3>Personal Info</h3>
                        </div>
                        <ul class="about-dt-items">
                            <li>
                                <div class="about-itdts">
                                    <div class="about-1">
                                        Member Since
                                    </div>
                                    <div class="about-2">
                                        {{date_format($user_model['about_model']['created_at'],"F j, Y")}}
                                    </div>
                                </div>
                            </li>
                            @IF($user_model['about_model']['user_country'] != NULL)
                            <li>
                                <div class="about-itdts">
                                    <div class="about-1">
                                        Lives in
                                    </div>
                                    <div class="about-2">
                                        {{$user_model['about_model']['user_country']}}
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
                            @IF($user_model['about_model']['birthday'] != NULL)
                            <li>
                                <div class="about-itdts">
                                    <div class="about-1">
                                        Birthday
                                    </div>
                                    <div class="about-2">
                                        {{$user_model['about_model']['birthday']}}
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
                                        {{$user_model['about_model']['gender']}}
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="about-itdts">
                                    <div class="about-1">
                                        Status
                                    </div>
                                    <div class="about-2">
                                        {{$user_model['about_model']['status']}}
                                    </div>
                                </div>
                            </li>
                            @IF($user_model['about_model']['contact_email'] != NULL)
                            <li>
                                <div class="about-itdts">
                                    <div class="about-1">
                                        Contact Email
                                    </div>
                                    <div class="about-2">
                                        {{$user_model['about_model']['contact_email']}}
                                    </div>
                                </div>
                            </li>
                            @ENDIF
                            @IF($user_model['about_model']['phone_number'] != NULL)
                            <li>
                                <div class="about-itdts">
                                    <div class="about-1">
                                        Phone No.
                                    </div>
                                    <div class="about-2">
                                        {{$user_model['about_model']['phone_number']}}
                                    </div>
                                </div>
                            </li>
                            @ENDIF

                        </ul>
                    </div>
                    <div class="user-data full-width">
                        @IF($user_model['isSocialNetworksNull'] == 1)
                        <div class="about-left-heading">
                            <h3>Social Accounts</h3>
                        </div>
                        <div class="categories-items">
                            @IF($user_model['about_model']['social_webpage'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_webpage']}}"><i class="fas fa-globe" style="color:#51a5fb;"></i><span class="pl-3">{{$user_model['about_model']['social_webpage']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_facebook'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_facebook']}}"><i class="fab fa-facebook-square" style="color:#3b5998;"></i><span class="pl-3">{{$user_model['about_model']['social_facebook']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_twitter'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_twitter']}}"><i class="fab fa-twitter" style="color:#1da1f2;"></i><span class="pl-3">{{$user_model['about_model']['social_twitter']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_youtube'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_youtube']}}"><i class="fab fa-google-plus" style="color:#dd4b39;"></i><span class="pl-3">{{$user_model['about_model']['social_youtube']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_instagram'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_instagram']}}"><i class="fab fa-instagram" style="color:#405de6;"></i><span class="pl-3">{{$user_model['about_model']['social_instagram']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_linkedin'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_linkedin']}}"><i class="fab fa-pinterest" style="color:#bd081c;"></i><span class="pl-3">{{$user_model['about_model']['social_linkedin']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_other1'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_other1']}}"><i class="fab fa-linkedin" style="color:#0077b5;"></i><span class="pl-3">{{$user_model['about_model']['social_other1']}}</span></a>
                            @ENDIF
                            @IF($user_model['about_model']['social_other2'] != NULL)
                            <a class="category-social-item text-truncate" href="{{$user_model['social_other2']}}"><i class="fab fa-youtube" style="color:#ff0000;"></i><span class="pl-3">{{$user_model['about_model']['social_other2']}}</span></a>
                            @ENDIF
                        </div>
                        @ELSE
                        <div class="about-left-heading">
                            <h3>Social Accounts</h3>
                        </div>
                        <div class="categories-items">
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <h6>This user has social media link hidden.</h6>
                                </div>
                            </div>
                        </div>
                        @ENDIF
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="user-data full-width">
                        <div class="about-left-heading">
                            <h3>About</h3>
                        </div>
                        @IF($user_model['about_model']['about'] != NULL)
                        <div class="about-dt-des">
                            <p>{{$user_model['about_model']['about']}}</p>
                        </div>
                        @ENDIF
                    </div>
                    <div class="user-data full-width">
                        <div class="about-left-heading">
                            <h3>Hobbies</h3>
                        </div>
                        @IF($user_model['isFavouritesNull'] == 1)
                        <div class="about-hobbies">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    @IF($user_model['about_model']['favourite_music_genre'] != NULL)
                                    <div class="all-hobbies">
                                        <h6>Favourite Music Genre</h6>
                                        <span>{{$user_model['about_model']['favourite_music_genre']}}</span>
                                    </div>
                                    @ENDIF
                                    @IF($user_model['about_model']['favourite_books'] != NULL)
                                    <div class="all-hobbies">
                                        <h6>Favourite Books</h6>
                                        <span>{{$user_model['about_model']['favourite_books']}}</span>
                                    </div>
                                    @ENDIF
                                    @IF($user_model['about_model']['favourite_music'] != NULL)
                                    <div class="all-hobbies">
                                        <h6>Favourite Music</h6>
                                        <span>{{$user_model['about_model']['favourite_music']}}</span>
                                    </div>
                                    @ENDIF
                                    @IF($user_model['about_model']['favourite_movies'] != NULL)
                                    <div class="all-hobbies">
                                        <h6>Favourite Movies</h6>
                                        <span>{{$user_model['about_model']['favourite_movies']}}</span>
                                    </div>
                                    @ENDIF
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    @IF($user_model['about_model']['favourite_games'] != NULL)
                                    <div class="all-hobbies">
                                        <h6>Favourite Games</h6>
                                        <span>{{$user_model['about_model']['favourite_games']}}</span>
                                    </div>
                                    @ENDIF
                                    @IF($user_model['about_model']['favourite_brands'] != NULL)
                                    <div class="all-hobbies">
                                        <h6>Favourite Brands</h6>
                                        <span>{{$user_model['about_model']['favourite_brands']}}</span>
                                    </div>
                                    @ENDIF
                                    @IF($user_model['about_model']['favourite_artists'] != NULL)
                                    <div class="all-hobbies">
                                        <h6>Favourite Artists</h6>
                                        <span>{{$user_model['about_model']['favourite_artists']}}</span>
                                    </div>
                                    @ENDIF
                                    @IF($user_model['about_model']['favourite_interests'] != NULL)
                                    <div class="all-hobbies">
                                        <h6>Other Interests</h6>
                                        <span>{{$user_model['about_model']['favourite_interests']}}</span>
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
                                    </div>
                                    <div class="about-hobbies">
                                        <div class="all-hobbies">
                                            <h6>{{$user_model['about_model']['education_title']}}</h6>
                                            <span>{{$user_model['about_model']['education_date_start']}} - {{$user_model['about_model']['education_date_end']}}</span>
                                            <a href="{{$user_model['about_model']['education_institute']}}">{{$user_model['about_model']['education_institute']}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="user-data full-width mb-20">
                                    <div class="about-left-heading">
                                        <h3>Eployment</h3>
                                    </div>
                                    <div class="about-hobbies">
                                        <div class="all-hobbies">
                                            <h6>{{$user_model['about_model']['employment_title']}}</h6>
                                            <span>{{$user_model['about_model']['employment_date_start']}} - {{$user_model['about_model']['employment_date_end']}}</span>
                                            <a href="{{$user_model['about_model']['education_institute']}}">{{$user_model['about_model']['employment_company']}}</a>
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
    @else
    <div class="dash-tab-links">
        <div class="container text-center">
            <h1>This account is Private</h1>
            <h4>Follow to see his posts, friends, images and videos!</h4>
        </div>
    </div>
    @endif
</div>