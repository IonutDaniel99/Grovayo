$(document).ready(function () {
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
});



