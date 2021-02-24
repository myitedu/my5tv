$(function () {

    $(".numbers").click(function () {
        var number = $(this).text();
        $(".calc_display").html(number);
    });

    $(".sign").click(function () {
       var sing = $(this).text();
    });


});