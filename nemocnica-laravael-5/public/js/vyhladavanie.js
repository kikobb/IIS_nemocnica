$(function() {
    $('#dest_dropdown').change(function() {
        let val = $(this).val();

        if (val !== "") {
            $("#source_dropdown").removeAttr('disabled');
            // alert('a[rel="' + val + '"]');
            $('#source_dropdown').val("");
            $('#source_dropdown option:not(.label)').css('display', 'none');
            $('option[rel="' + val + '"]').css('display', 'block');
            $('option.label').css('display', 'none');
        } else {
            $("#source_dropdown").attr('disabled', 'disabled');
            $('option.label').css('display', 'block');
            $('#source_dropdown').val("");
        }
    });


});
