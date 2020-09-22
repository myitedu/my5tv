<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>

<?php
$class = null;
for($i=0; $i<25; $i++){

    if ($i%2===0){
        $class = "even_box";
    }else{
        $class = null;
    }
    echo "<div class='box $class'>$i</div>";
}
?>

<style>
    .even_box{
        background-color: darkred !important;
        color: wheat;
    }

    .box{
        width: 100px;
        height: 100px;
        background-color: lightgrey;
        border: 1px solid black;
        border-radius: 50%;
        margin: 20px;
        text-align: center;
        line-height: 100px;
        font-size: 3em;
        display: inline-grid;
    }
    body{
        background-color: #0a2998;
    }
</style>

</body>
</html>