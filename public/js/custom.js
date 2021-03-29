
// menu script.
$(document).ready(function () {
    var fixHeight = function () {
        $(".navbar-nav").css(
            "max-height",
            document.documentElement.clientHeight - 1000
        );
    };

    fixHeight();

    $(window).resize(function () {
        fixHeight();
    });

    $(".navbar .navbar-toggler").on("click", function () {
        fixHeight();
    });

    $(".navbar-toggler, .overlay").on("click", function () {
        $(".mobileMenu, .overlay").toggleClass("open");
        console.log("clicked");
    });

    // Personal-Profile



    $('#education_present_checkbox').on('click', function () {
        if ($(this).is(':checked')) {
            $('#education_present_date').val('Present');
            $('#education_present_date').hide()
        } else {
            $('#education_present_date').val('');
            $('#education_present_date').show();
        }
    });

    $('#employee_present_checkbox').on('click', function () {
        if ($(this).is(':checked')) {
            $('#employee_present_date').val('Present');
            $('#employee_present_date').hide()
        } else {
            $('#employee_present_date').val('');
            $('#employee_present_date').show();
        }
    });


    //Country State City
    $('#country-dropdown').on('change', function () {
        var country_id = this.value;
        $("#state-dropdown").html('');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/Personal-Info/get-states-by-country",
            type: "POST",
            data: {
                country_id: country_id,
            },
            dataType: 'json',
            success: function (result) {
                $('#state-dropdown').append('<option value="">Select State</option>');
                $.each(result.states, function (key, value) {
                    $("#state-dropdown").append('<option value="' + value.id + '" class="option">' + value.name + '</option>');
                });
            }
        });
    });

    $('#state-dropdown').on('change', function () {
        var state_id = this.value;
        $("#city-dropdown").html('');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/Personal-Info/get-cities-by-state",
            type: "POST",
            data: {
                state_id: state_id,
            },
            dataType: 'json',
            success: function (result) {
                $('#city-dropdown').append('<option value="">Select City</option>');
                $.each(result.cities, function (key, value) {
                    $("#city-dropdown").append('<option value="' + value.id + '" class="option">' + value.name + '</option>');
                });
            }
        });
    });

});




// Owl Testimonials
$('.testi-owl').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})


// Owl Related
$('.related-owl').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})


// Owl Organizer
$('.organizer-owl').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 3
        }
    }
})


// Owl Related
$('.blog-owl').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        },
        1200: {
            items: 4
        }
    }
})


// Owl widget
$('.widget-owl').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 4
        },
        1000: {
            items: 7
        }
    }
})

//Profile Image

function load_profile_file(event) {
    var output = document.getElementById('profileProfileImage');
    output.src = URL.createObjectURL(event.target.files[0]);
}


//Background Image

function load_background_file(event) {
    var output = document.getElementById('profileBackgroundImage');
    output.src = URL.createObjectURL(event.target.files[0]);
}

