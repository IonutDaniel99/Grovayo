<x-app-layout>
    <main class="dashboard-mp">
        @livewire('nav.profile.user-info')
        <div class="dash-tab-links">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        @livewire('nav.profile.tabs')

                    </div>
                    <div class="col-lg-3 col-md-5">
                        <div class="user-data full-width">
                            <div class="about-left-heading">
                                <h3>Personal Info</h3>
                                <a href="my_dashboard_setting_info.html">Edit</a>
                            </div>
                            <ul class="about-dt-items">
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Member Since
                                        </div>
                                        <div class="about-2">
                                            August 2017
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Lives in
                                        </div>
                                        <div class="about-2">
                                            India
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Birthday
                                        </div>
                                        <div class="about-2">
                                            29 August 1991
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Gender
                                        </div>
                                        <div class="about-2">
                                            Male
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Status
                                        </div>
                                        <div class="about-2">
                                            Single
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Email
                                        </div>
                                        <div class="about-2">
                                            Gambol943@gmail.com
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Phone No.
                                        </div>
                                        <div class="about-2">
                                            +91 123 456 7890
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-itdts">
                                        <div class="about-1">
                                            Member Since
                                        </div>
                                        <div class="about-2">
                                            August 2017
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="user-data full-width">
                            <div class="about-left-heading">
                                <h3>Social Accounts</h3>
                                <a href="my_dashboard_setting_social.html">Edit</a>
                            </div>
                            <div class="categories-items">
                                <a class="category-social-item" href="#"><i class="fas fa-globe" style="color:#51a5fb;"></i>www.example.com</a>
                                <a class="category-social-item" href="#"><i class="fab fa-facebook-square" style="color:#3b5998;"></i>http://www.facebook.com</a>
                                <a class="category-social-item" href="#"><i class="fab fa-twitter" style="color:#1da1f2;"></i>http://www.twitter.com</a>
                                <a class="category-social-item" href="#"><i class="fab fa-google-plus" style="color:#dd4b39;"></i>http://www.googleplus.com</a>
                                <a class="category-social-item" href="#"><i class="fab fa-instagram" style="color:#405de6;"></i>http://www.instagram.com</a>
                                <a class="category-social-item" href="#"><i class="fab fa-pinterest" style="color:#bd081c;"></i>http://www.pinterest.com</a>
                                <a class="category-social-item" href="#"><i class="fab fa-linkedin" style="color:#0077b5;"></i>http://www.linkedin.com</a>
                                <a class="category-social-item" href="#"><i class="fab fa-youtube" style="color:#ff0000;"></i>http://www.youtube.com/</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="user-data full-width">
                            <div class="about-left-heading">
                                <h3>About</h3>
                                <a href="my_dashboard_setting_info.html">Edit</a>
                            </div>
                            <div class="about-dt-des">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl. Nunc suscipit nulla dapibus nisi vestibulum tincidunt. Cras vestibulum vel ante et porttitor. Duis luctus consequat purus. Duis bibendum eget enim nec posuere. Aliquam purus lectus, blandit aliquam enim nec, viverra egestas libero. Suspendisse dictum neque et finibus posuere. </p>
                            </div>
                        </div>
                        <div class="user-data full-width">
                            <div class="about-left-heading">
                                <h3>Hobbies</h3>
                                <a href="my_dashboard_setting_info.html">Edit</a>
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
                                            <a href="my_dashboard_setting_info.html">Edit</a>
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
                                            <a href="my_dashboard_setting_info.html">Edit</a>
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
    </main>
</x-app-layout>