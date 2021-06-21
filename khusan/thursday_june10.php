<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>

<h1>Welcome to Dubai!</h1>
<hr>
<div id="div_dubai">
    <div class="txt_dubai">Dubai is the final destination</div>
    <img id="img_dubai" src="http://cdn.cnn.com/cnnnext/dam/assets/200924183413-dubai-9-1.jpg" alt="Dubai Image">
<hr>
    <button class="btn-success" id="btn_show">SHOW</button>
    <button class="btn btn-danger" id="btn_hide">HIDE</button>
</div>


<script>

    $(function () {
        $("#btn_show").click(function () {
            $("#img_dubai").show();
            $(".txt_dubai").show();
        });

        $("#btn_hide").click(function () {
            $("#img_dubai").hide();
            $(".txt_dubai").hide();
        });


    });



</script>

<style>

    #txt_dubai{
        background-color: #8b000063;
        color: yellow;
        width: 60%;
        height: 100px;
        margin: auto;
        border: 1px solid black;
        position: relative;
        top: 210px;
        font-size: 30px;
        line-height: 84px;
    }

    h1{
        text-align: center;
        color: rebeccapurple;
    }
    #div_dubai img{
        width: 70%;
    }
    #div_dubai{
        text-align: center;
    }
</style>

</body>
</html>