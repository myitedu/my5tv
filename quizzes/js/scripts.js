$(function (){

    $("#quiz").load("backend.php");

    $("#left_button").click(function (){
        $("#quiz").load("backend.php?q=2");
    });

    $("#right_button").click(function (){
        $("#quiz").load("backend.php?q=3");
    });

});