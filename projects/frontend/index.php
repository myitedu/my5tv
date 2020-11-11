<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to our HTML class</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<div class="mybox">
    <div>MY BOX</div>
    <div>MY BOX</div>
    <div>MY BOX</div>
    <div>MY BOX</div>
    <div>MY BOX</div>
    <div>MY BOX</div>
    <div>MY BOX</div>
    <div>MY BOX</div>
    <div>MY BOX</div>
    <div>MY BOX</div>
    <div>MY BOX</div>
</div>

<nav>
    <a href="#">HOME</a>
    <a href="#">CONTACT US</a>
    <a href="#">PRODUCTS</a>
    <a href="#">ABOUT US</a>
    <a href="#">TERMS</a>
</nav>
<hr>
<div class="mynav">
    <a class="btn btn-success" href="#">HOME</a>
    <a class="btn btn-info"  href="#">CONTACT US</a>
    <a class="btn btn-danger"  href="#">PRODUCTS</a>
    <a class="btn btn-dark"  href="#">ABOUT US</a>
    <a class="btn btn-success"  href="#">TERMS</a>
</div>

    <style>

        .btn-dark{
            background-color: #801f5257 !important;
        }

        .mynav{
            width: 570px;
            height: 145px;
            background-color: #0c546069;
            position: relative;
            left: 310px;
            top: 90px;
            border: 10px double #282612;
            line-height: 140px;
        }

        nav a:hover{
            color: #cfa50b;
        }

        nav a{
            color: #690a0a;
            font-size: 16px;
            padding-right: 10px;
            font-weight: bolder;
            font-style: normal;
            text-decoration: none;
        }

        nav{
            width: 570px;
            height: 145px;
            background-color: #0c546069;
            position: relative;
            left: 310px;
            top: 110px;
            border: 10px double #282612;
            line-height: 140px;
        }

        .mybox{
            text-align: center;
        }

        .mybox div:nth-child(4){
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTRJnzpEXIWHpbnBKxjwz1Sk0oWHF-haJmu5w&usqp=CAU");
        }

        .mybox div:nth-child(3){
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTrKHPsvNDJHY9tWpkHrfkfo8Dkf0LvZU3Hdg&usqp=CAU");
        }

        .mybox div:hover{
            border: 10px solid #429b14;
            box-shadow: 5px 5px 5px 5px #1a4f07;
        }

        .mybox div{
            width: 100px;
            height: 100px;
            background-color: rebeccapurple;
            text-align: center;
            font-size: 20px;
            line-height: 90px;
            color: navajowhite;
            border: 10px solid darkblue;
            box-shadow: 5px 5px 5px 5px #04044f;
            text-shadow: 2px 1px #a1136f;
            margin: 20px;
            display: inline-block;
            background-image: url("https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png");
            background-size: 100% 100%;
            cursor: pointer;
        }

        body{
            background-color: black;
            background-image: url("https://apod.nasa.gov/apod/image/2008/PerseidBridge_Zhang_4032.jpg");
            background-size: 100% 100%;
            background-repeat: no-repeat;
            text-align: center;
        }

        html, body{
            width: 100%;
            height: 100%;
            padding: 0px;
            margin: 0px;
        }

    </style>

</body>
</html>
