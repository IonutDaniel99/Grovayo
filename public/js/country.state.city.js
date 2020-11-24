$(document).ready(function () {
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
