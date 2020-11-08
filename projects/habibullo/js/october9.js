$(function (){
    $(".box").click(function (){
       let title = $(this).text();
       document.location = "october9.php?specialist="+title;
    });

    $(".container-fluid").click(function (){
        $(".display").fadeOut('slow');
    });
    $(".close_button").click(function (){
        $(".display").fadeOut('slow');
    });
})