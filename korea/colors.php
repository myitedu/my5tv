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
$color = null;
if (!empty($_GET['color'])) {
    $color = $_GET['color'];
    setcookie('color', $color, time() + 3600*24*3650);
}
$get_color = $_COOKIE['color']??'white';
?>
<div class="container-fluid">
<p><?php echo "$color and $get_color";?> </p>
    <form method="GET" action="colors.php">
        <p>Pick your color:
        <input type="color" name="color">
            <button type="submit">GO</button>
        </p>
    </form>

    <style>
        body{
            background-color: <?php echo $get_color;?>;
        }
    </style>

</div>
</body>
</html>