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

<?php
$name = 'Jessica';
?>


<h3>Welcome to Page 1: <?php echo $name;?></h3>
<hr>
<nav>
    <a href="february10.php">Page 1</a> |
    <a href="february10a.php?name=<?php echo $name;?>&country=usa">Page 2</a> |
</nav>


<style>
    body{
        background-color: #5890ff;
    }
</style>

</body>
</html>