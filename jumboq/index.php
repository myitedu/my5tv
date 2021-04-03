<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div id="room">
<div id="tv">
    <iframe id="youtube" src="https://www.youtube.com/embed/hT1hALCQCy8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>

<style>
    #youtube{
        width: 290px;
        height: 160px;
        position: relative;
        left: 440px;
        top: 213px;
    }
    body{
        background-color: black;
    }
    #tv{
        width: 1250px;
        height: 650px;
        background-color: black;
        margin: auto;
        background-image: url(img/large_tv_screen.png);
        background-size: 100% 100%;
    }
</style>

</body>
</html>