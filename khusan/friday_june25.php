<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
</head>
<body>
<h1 class="title">Customer Form</h1>
<div id="customer_form">
<form>
    <p>Enter Your Name: <input type="text" name="full_name" placeholder="Your Full Name"></p>
    <p>Enter your age: <input id="age" type="number" name="age" placeholder="Your age">
    <img id="check_icon" src="https://lh3.googleusercontent.com/proxy/ysPbnwyfTVuHfjiW5kuExf4MPz2lilOy1nlKbwtVJCnTJ8s5f2gQLKdEFw-zt3F7obcCFtqvx7P-mvtOXbRCkk5tJ1BZN_E">
    </p>
    <p><button class="btn btn-info" id="mybutton">Submit</button></p>
</form>
</div>

<script>
    $(function () {

        $("#mybutton").click(function () {
            let age = $("#age").val();

            if (age<21){
                $("#check_icon").show().attr("src","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUTpaKMLRugIzcfni0NbHhJEsOBGeUSRObh40pz23GtLOgRQWOUchpQHWz97pHHXX2pqA&usqp=CAU");
            }else{
                $("#check_icon").show().attr("src","https://lh3.googleusercontent.com/proxy/ysPbnwyfTVuHfjiW5kuExf4MPz2lilOy1nlKbwtVJCnTJ8s5f2gQLKdEFw-zt3F7obcCFtqvx7P-mvtOXbRCkk5tJ1BZN_E");
            }

            return false;
        });

    });
</script>

<style>
    #check_icon{
        width: 30px;
        display: none;
    }
    p{
        text-align: center;
    }
    .title{
        text-align: center;
        color: purple;
    }
    #customer_form{
        width: 500px;
        height: auto;
        margin: auto;
        background-color: #fff;
        color: darkred;
        border: 1px solid darkblue;
        padding: 5px;
    }
</style>

</body>
</html>
