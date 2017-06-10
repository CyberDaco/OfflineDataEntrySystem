var $jqDate = jQuery('input.aussie_date[type=text]');

//Bind keyup/keydown to the input
$($jqDate).bind('keyup','keydown', function(e){
    //To accomdate for backspacing, we detect which key was pressed - if backspace, do nothing:
    if(e.which !== 8) {
        var numChars = $jqDate.val().length;
        if(numChars === 2 || numChars === 5){
            var thisVal = $jqDate.val();
            thisVal += '/';
            $jqDate.val(thisVal);
        }
    }
});

$(document).on('click', '.delete', function() {
    $('#delete_id').val($(this).data("id"));
});

$(document).ready(function() {
    //Datemask dd/mm/yyyy
    $(".ddmmyyy").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
});