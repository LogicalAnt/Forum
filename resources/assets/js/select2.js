$(document).ready(function() {
    $('.js-example-basic-single').select2();
});

//reply form
$(function() {
    $("#usermsg").keypress(function (e) {
        if(e.which == 13) {
            //submit form via ajax, this is not JS but server side scripting so not showing here
            //alert($(this).val());
            $('form#reply').submit();
            $(this).val("");
            e.preventDefault();
        }
    });
});