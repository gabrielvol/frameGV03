$(document).ready(function () {
    $('.button_form_submit').scrollPosReload(); // scrollKeep.js

    $('.pop_general button').click(function () {
        $('#formID').submit();
    });
    
    
/* // jQuery Datepicker ----------------------------------------------------- */
    $("input.fecha").datepicker({
        numberOfMonths: 2,
        showButtonPanel: true
    });
});