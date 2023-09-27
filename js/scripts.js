// GET ACTUAL YEAR
var year = (new Date).getFullYear();
$(document).ready(function () {
    $("#date").text(year);
});

// EXPORT EXCEL
$(document).ready(function () {
    jQuery('#export-menu p').bind("click", function () {
        var target = $(this).attr('id');
        switch (target) {
            case 'export-to-excel' :
                $('#hidden-type').val(target);
                //alert($('#hidden-type').val());
                $('#export-form').submit();
                $('#hidden-type').val('');
                break
        }
    });
});