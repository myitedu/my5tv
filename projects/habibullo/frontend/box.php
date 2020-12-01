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
<div id="mybox">
    <div class="mycontent">
        <span class="title">Travel to Florida!</span>
        <div class="title2">
            JOIN US TODAY
        </div>
        <div class="mybutton">
            <button>REGISTER</button>
        </div>
    </div>
</div>
<style>
    #mybox{
        width: 700px;
        height: 500px;
        border: 1px solid black;
        background-color: #0c5460;
        margin: 100px auto;
        background-image: url("https://www.travolution.com/images/cms/original/9/8/b/0/3/easid-115328-media-id-7450.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        text-align: center;
        font-size: 50px;

    }
    .mycontent{
        position: relative;
        top: 182px;
    }
    .title{
        font-family: "Lucida Handwriting";
        text-shadow: 3px 3px black;
        color: #63b9d2;
    }

    .title2{
        background-color: red;
        font-size: 30px;
        color: white;
        border-top: 3px solid white;
        border-bottom: 3px solid white;
        opacity: 0.4;
    }
    .mybutton button{
        padding: 5px;
        border: 1px solid #1d859c;
        border-radius: 12px;
        background-color: #600c5263;
        color: white;
        cursor: pointer;
    }
    .mybutton button:hover{
        background-color: red;
    }
</style>
</body>
</html>