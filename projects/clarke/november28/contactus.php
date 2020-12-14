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
$name = $_REQUEST['name']??null;
?>
<h1>Contact Us</h1>
<hr>
<h5>
    <?php echo $name; ?>
</h5>
<hr>
<a href="index.php">Index File</a>
</body>
</html>