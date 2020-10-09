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
$matched = 0;



for($i=1; $i<=100; $i++){
$random = rand(1, 100);
$show_bucket = null;

if ($random%$i==0){
    $matched++;
    $show_bucket = 'show_bucket';
}

?>
<div class="section">
    <?php echo $i." | ". $random?>
    <img class="bucket <?php echo $show_bucket; ?>" src="https://www.jing.fm/clipimg/full/78-786283_plastic-clipart-bucket-bucket-png.png">
    <img class="dome" src="https://www.calftel.com/application/files/8415/0239/2138/PRO_product.png">
</div>
<?php
}
echo "<div class='clearfix'></div>";
echo "<br>";
echo "<hr>$matched<hr>";
?>


<style>

    .show_bucket{
        visibility: visible !important;
    }

    .section{
        float: left;
        display: inline-block;
    }

    .bucket{
        width: 20px;
        position: relative;
        left: 100px;
        visibility: hidden;

    }

    .dome{
        width: 100px;

    }

</style>
</body>
</html>