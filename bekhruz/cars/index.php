<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>
</head>
<?php
$id = $_GET['car']??0;
$color = $_GET['color']??"#000";
$id = (int) $id;
$cars = [
    [
        'name' => 'Audi S8',
        'year' => 2020,
        'engine' => 'V8',
        'price' => 110000,
        'img' => '2020-Audi-S8.jpg'
    ],
    [
        'name' => 'BMW 750li',
        'year' => 2021,
        'engine' => 'V12',
        'price' => 130000,
        'img' => 'bmw_730.jpg'
    ],
    [
        'name' => 'Chevy Tahoe',
        'year' => 2019,
        'engine' => 'V8',
        'price' => 70000,
        'img' => 'chevy_tahoe.png'
    ],
    [
        'name' => 'GMC Yukon XL',
        'year' => 2021,
        'engine' => 'V8',
        'price' => 73000,
        'img' => 'gmc_yukon_denali.jpg'
    ],
    [
        'name' => 'Lexus IS 500',
        'year' => 2021,
        'engine' => 'V8',
        'price' => 90000,
        'img' => 'lexusis500.jpg'
    ],
];

if ($id>=count($cars)){
    $id = 0;
}
if ($id<0){
    $id = 0;
}
?>
<body bgcolor="<?=$color?>" style="background-image: url(https://cdn2.vectorstock.com/i/1000x1000/95/16/elegant-black-background-with-gold-lace-ornament-vector-2269516.jpg)">
<div id="myheader">
    <form>
        <p>Color: <input name="color" type="color"><button type="submit">Change</button></p>
    </form>
</div>
<div id="mycars">
    <div id="window_left">
        <?php
        foreach ($cars as $num=>$car){
        ?>
        <a class="car" href="index.php?car=<?=$num;?>"><img src="img/<?=$car['img'];?>"></a>
        <?php
        }
        ?>
    </div>
    <div id="window_right" style="background-image: url('img/<?=$cars[$id]['img']?>')">
        <div class="car_price"><br>$<?=$cars[$id]['price']?></div>
        <div class="car_description">
            <?=$cars[$id]['name']?> <?=$cars[$id]['year']?> <br>
            Engine: <?=$cars[$id]['engine']?> <br>
            Price: $<?=$cars[$id]['price']?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

</body>
</html>