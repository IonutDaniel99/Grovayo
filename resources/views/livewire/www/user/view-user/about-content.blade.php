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
                                        {{date_format($user_model['created_at'],"F j, Y")}}
                                    </div>
                                </div>
                            </li>
                            @IF($user_model['user_country'] != NULL)
                            <li>
                                <div class="about-itdts">
                                    <div class="about-1">
                                        Lives in
                                    </div>
                                    <div class="about-2">
                                        {{$user_model['user_country']}}
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
                                        {{$user_model['about_model']['birthday'] }}
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
                            @IF($user_model['contact_email'] != NULL)
                            <li>
                                <div class="about-itdts">
                                    <div class="about-1">
                                        Contact Email
                                    </div>
                                    <div class="about-2">
                                        {{$user_model['contact_email']}}
                                    </div>
                                </div>
                            </li>
                            @ENDIF
                            @IF($user_model['phone_number'] != NULL)
                            <li>
                                <div class="about-itdts">
                                    <div class="about-1">
                                        Phone No.
                                    </div>
                                    <div class="about-2">
                                        {{$user_model['phone_number']}}
                                    </div>
                                </div>
                            </li>
                            @ENDIF

                        </ul>
                    </div>
                    <div class="user-data full-width">
                        <!-- @IF($user_model['isSocialNetworksNull'] == 1)
                        <div class="about-left-heading">
                            <h3>Social Accounts</h3>
                        </div>
                        <div class="categories-items">
                            @IF($user_model['social_webpage'] != NULL)
                            <a class="category-social-item" href="{{$user_model['social_webpage']}}"><i class="fas fa-globe" style="color:#51a5fb;"></i>{{$user_model['social_webpage']}}</a>
                            @ENDIF
                            @IF($user_model['social_facebook'] != NULL)
                            <a class="category-social-item" href="{{$user_model['social_facebook']}}"><i class="fab fa-facebook-square" style="color:#3b5998;"></i>{{$user_model['social_facebook']}}</a>
                            @ENDIF
                            @IF($user_model['social_twitter'] != NULL)
                            <a class="category-social-item" href="{{$user_model['social_twitter']}}"><i class="fab fa-twitter" style="color:#1da1f2;"></i>{{$user_model['social_twitter']}}</a>
                            @ENDIF
                            @IF($user_model['social_youtube'] != NULL)
                            <a class="category-social-item" href="{{$user_model['social_youtube']}}"><i class="fab fa-google-plus" style="color:#dd4b39;"></i>{{$user_model['social_youtube']}}</a>
                            @ENDIF
                            @IF($user_model['social_instagram'] != NULL)
                            <a class="category-social-item" href="{{$user_model['social_instagram']}}"><i class="fab fa-instagram" style="color:#405de6;"></i>{{$user_model['social_instagram']}}</a>
                            @ENDIF
                            @IF($user_model['social_linkedin'] != NULL)
                            <a class="category-social-item" href="{{$user_model['social_linkedin']}}"><i class="fab fa-pinterest" style="color:#bd081c;"></i>{{$user_model['social_linkedin']}}</a>
                            @ENDIF
                            @IF($user_model['social_other1'] != NULL)
                            <a class="category-social-item" href="{{$user_model['social_other1']}}"><i class="fab fa-linkedin" style="color:#0077b5;"></i>{{$user_model['social_other1']}}</a>
                            @ENDIF
                            @IF($user_model['social_other2'] != NULL)
                            <a class="category-social-item" href="{{$user_model['social_other2']}}"><i class="fab fa-youtube" style="color:#ff0000;"></i>{{$user_model['social_other2']}}</a>
                            @ENDIF
                        </div>
                        @ENDIF -->
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="user-data full-width">
                        <div class="about-left-heading">
                            <h3>About</h3>
                        </div>
                        <div class="about-dt-des">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl. Nunc suscipit nulla dapibus nisi vestibulum tincidunt. Cras vestibulum vel ante et porttitor. Duis luctus consequat purus. Duis bibendum eget enim nec posuere. Aliquam purus lectus, blandit aliquam enim nec, viverra egestas libero. Suspendisse dictum neque et finibus posuere. </p>
                        </div>
                    </div>
                    <div class="user-data full-width">
                        <div class="about-left-heading">
                            <h3>Hobbies</h3>
                        </div>
                        <div class="about-hobbies">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="all-hobbies">
                                        <h6>Favourite Music</h6>
                                        <span>Folk, Rap, Solo, Hiphop</span>
                                    </div>
                                    <div class="all-hobbies">
                                        <h6>Favourite Books</h6>
                                        <span>Novel, Comics, Jokes, Love Stories, Secience, History</span>
                                    </div>
                                    <div class="all-hobbies">
                                        <h6>Favourite Music</h6>
                                        <span>Dangle, Na Peru Suriya, Raja the Great, Bahubali 2</span>
                                    </div>
                                    <div class="all-hobbies">
                                        <h6>Favourite Tv Shows</h6>
                                        <span>The Kapil Sharma Show, Kulfi, CID, Big Boss</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="all-hobbies">
                                        <h6>Favourite Games</h6>
                                        <span>Cricket, Football, Hockey, Kabaddi</span>
                                    </div>
                                    <div class="all-hobbies">
                                        <h6>Favourite Brands</h6>
                                        <span>Apple, Oppo, Nike, Addidas, Puma. Jack &amp; Jone, Nokia</span>
                                    </div>
                                    <div class="all-hobbies">
                                        <h6>Favourite Artists</h6>
                                        <span>Babbu Maan, Salman Khan, Kapil Sharma, Priyanka Chopra</span>
                                    </div>
                                    <div class="all-hobbies">
                                        <h6>Other Interests</h6>
                                        <span>Travel, Hiking, Web designing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            <h6>Master of Science in Information Technology</h6>
                                            <span>2014 - 2016</span>
                                            <a href="#">Lovelt Professional University</a>
                                        </div>
                                        <div class="all-hobbies">
                                            <h6>Bachelor of Science in Information Technology</h6>
                                            <span>2011 - 2014</span>
                                            <a href="#">Punjab Technical University</a>
                                        </div>
                                        <div class="all-hobbies">
                                            <h6>Graphic Designing Course</h6>
                                            <span>2016 - 2017</span>
                                            <a href="#">Gambol Information Institute</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="user-data full-width mb-20">
                                    <div class="about-left-heading">
                                        <h3>Education</h3>
                                    </div>
                                    <div class="about-hobbies">
                                        <div class="all-hobbies">
                                            <h6>Owner and Founder</h6>
                                            <span>2017 - Present</span>
                                            <a href="#">Gambol Themes</a>
                                        </div>
                                        <div class="all-hobbies">
                                            <h6>Graphic Designer</h6>
                                            <span>2016 - 2017</span>
                                            <a href="#">Company Name</a>
                                        </div>
                                        <div class="all-hobbies">
                                            <h6>Web Designer</h6>
                                            <span>2016 - 2017</span>
                                            <a href="#">Company Name</a>
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
            <h4>Follow to see his posts, images and videos!</h4>
        </div>
    </div>
    @endif
</div>