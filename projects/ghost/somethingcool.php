<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

 <div data-color="red" style="background-color: red" class="box"></div>
 <div data-color="green" style="background-color: green" class="box"></div>
 <div data-color="black" style="background-color: black" class="box"></div>
 <div data-color="blue" style="background-color: blue" class="box"></div>
 <div data-color="goldenrod" style="background-color: goldenrod" class="box"></div>
 <div data-color="lightcoral" style="background-color: lightcoral" class="box"></div>
 <div data-color="darkolivegreen" style="background-color: darkolivegreen" class="box"></div>
 <div data-color="darkmagenta" style="background-color: darkmagenta" class="box"></div>

 <div class="myimg">

 </div>

 <style>

     .myimg{
         width: 650px;
         height: 650px;
         background-color: red;
         margin: 200px auto;
         border: 5px solid black;
         border-radius: 50%;
         background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRCDSHpkrFDH491rcB0AL7T7WlLhD4Gq0veKQ&usqp=CAU");
         background-size: 100% 100%;
     }

     .box{
         width: 60px;
         height: 60px;
         border: 19px solid #2e6772;
         border-radius: 31%;
         display: inline-flex;
         margin: 5px;
         cursor: pointer;
     }
     .box:hover{
         background-color: #7b25a9 !important;
     }

     body{
         text-align: center;
     }
 </style>

<script>
    $(function (){

        $(".box").click(function (){
           let color = $(this).data('color');
           $("body").css("background-color",color);
        });


    });
</script>
</body>
</html>