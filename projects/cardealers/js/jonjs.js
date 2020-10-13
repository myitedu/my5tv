$(function(){
    $("#companies_lists").change(function (){
       let company = $("#companies_lists").val();
       document.location = "index.php?company="+company;
    });
});