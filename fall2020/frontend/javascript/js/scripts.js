$(function (){


$("#btn_go").click(function (){
   let first_name = $("#inp_first_name").val();
   if (first_name == 'Jon'){
       $("#result").html("WOOOOOHOOOO").show();
   }else{
       $("#result").html("Hello there, "+first_name).show();
   }
});

    $("#inp_first_name").keyup(function (){
        let color = $(this).val();
       $("body").css("background-color", color);
    });








});