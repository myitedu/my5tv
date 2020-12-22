$(function (){
$("#btn_update").click(function (){
    let temperature_degree = $("#temperature_degree").val();
    let temperature_degree2 = $("#temperature_degree2").val();
    temperature_degree = parseInt(temperature_degree);
    temperature_degree2 = parseInt(temperature_degree2);
    let temp = temperature_degree+","+temperature_degree2;
    temp =parseFloat(temp);
    alert(temp);



    let height = $("#degree").css("height");
    height = parseInt(height);
    height+=50;
    $("#degree").css("height", height+"px");
});
});