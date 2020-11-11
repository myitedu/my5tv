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
$text = file_get_contents("lorem.txt");
$text = str_replace("Lorem","<span class='mylorem'>Lorem</span>", $text);
echo $text;
?>


<style>

    .mylorem:hover{
        cursor: pointer;
        background-color: red;
    }

    .mylorem{
        background-color: yellow;
        padding:3px;
    }
</style>

</body>
</html>