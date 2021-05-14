<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagram Posts for user</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<body>
<?php
include_once "api.php";
?>
<div id="instagram">

    <div>
        <h3>Instagram Post for MYITEDU</h3>
        <hr>
        <form>
            <p>Search: <input type="text" name="userid" placeholder="Your Instagram user id">
                <button type="submit">GO</button></p>
        </form>
    </div>

    <?php foreach ($posts as $post): ?>
    <div class="photo">
       <img class="myphoto" src="#">
    </div>
    <?php endforeach;?>

</div>
<script>
    $(function () {
        let url = "https://scontent.cdninstagram.com/v/t51.2885-15/e35/s1080x1080/181667880_532744414409481_1730991357157366169_n.jpg?tp=1&_nc_ht=scontent.cdninstagram.com&_nc_cat=109&_nc_ohc=D8vN6lJ7GTAAX-3iOEo&edm=APU89FABAAAA&ccb=7-4&oh=7db72cb945ebea968ab6368bc82a2857&oe=60C2CA2D&_nc_sid=86f79a&ig_cache_key=MjU2Njg3ODk3MTYzMzc4ODg3NA%3D%3D.2-ccb7-4";
        $(".myphoto").attr('src',url);
    })
</script>
<style>

    .photo img{
        width: 100%;
        height: 100%;
    }

    .photo{
        width: 200px;
        height: 170px;
        border: 1px solid black;
        display: inline-block;
        margin: 20px;
    }

    #instagram{
        width: 99%;
        margin: auto;
        background-color: white;
        text-align: center;
    }
    body{
        background-color: #4d004d;
    }
</style>


</body>
</html>