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
$id = $_GET['id']??0;
$id = (int) $id;
$cities = ['tashkent','newyork','london'];
$text = file_get_contents('cities');
$cities_desc = explode('@', $text);
$cities_img = [
        'https://nomadlist.com/assets/img/places/tashkent-uzbekistan-1000px.jpg',
        'https://static.amazon.jobs/locations/58/thumbnails/NYC.jpg?1547618123',
        'https://imageproxy.themaven.net//https%3A%2F%2Fwww.history.com%2F.image%2FMTYyNDg1MjE3MTI1Mjc5Mzk4%2Ftopic-london-gettyimages-760251843-promo.jpg',
];
if ($id>count($cities)-1){
    $id = 0;
}

echo $id;
?>
<div class="container-fluid">
    <div class="jonbox">
    <div class="leftbox">
        <a href="october30.php?id=0"><div class="cities city_tashkent">Tashkent</div></a>
        <a href="october30.php?id=1"><div class="cities city_newyork">New York</div></a>
        <a href="october30.php?id=2"><div class="cities city_london">London</div></a>
    </div>
    <div class="rightbox">
        <div class="rightbox_title"><?php echo ucfirst($cities[$id])?></div>
        <img src="<?php echo $cities_img[$id]?>">
        <p class="rightboxa"><?php echo $cities_desc[$id]; ?></p>
    </div>
    <div class="clearfix"></div>
    </div>
</div>
<style>
    .rightbox_title{
        color: #0a0a01;
        font-size: 130%;
        text-align: center;
        font-weight: bolder;
        padding:5px;
        border-bottom: 3px solid #000000;
    }

    .rightbox img{
        width: 150px;
        margin: 3px;
        border: 1px solid black;
        border-radius: 15px;
        float: left;
        height: 80px;
    }


    .rightboxa:first-letter{
        font-size: 180%;
        color: darkred;
        font-weight: bolder;
        font-family: "Lucida Handwriting"
    }



    body{
        background-color: #0e52b0;
        background-image: url("https://png.pngtree.com/thumb_back/fw800/back_pic/04/02/65/225804f18f00c5f.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    .city_london{
        background-image: url("https://imageproxy.themaven.net//https%3A%2F%2Fwww.history.com%2F.image%2FMTYyNDg1MjE3MTI1Mjc5Mzk4%2Ftopic-london-gettyimages-760251843-promo.jpg");
    }

    .city_newyork{
        background-image: url("https://static.amazon.jobs/locations/58/thumbnails/NYC.jpg?1547618123");
    }
    .city_tashkent{
        background-image: url("https://nomadlist.com/assets/img/places/tashkent-uzbekistan-1000px.jpg");
    }

    .cities{
        width: 200px;
        height: 200px;
        margin: 5px;
        border: 1px solid black;
        border-radius: 50%;
        background-size: 100% 100%;
        text-align: center;
        line-height: 95px;
        color: whitesmoke;
        font-weight: bolder;
    }


    .rightbox{
        max-width: 73%;
        min-width: 73%;
        height: 100%;
        display: inline-block;
        float: right;
        overflow: auto;
    }
    .leftbox{
        width: auto;
        display: inline-block;
        height: 100%;
        text-align: center;
        border-right: 5px solid #000000;
    }
    .jonbox{
        width: 800px;
        height: auto;
        border: 1px solid black;
        margin: 100px auto;
        background-color: whitesmoke;
        border-radius: 20px;
        background-image: url("https://thumbs.dreamstime.com/b/white-wood-wall-texture-background-panels-graphic-resources-149622903.jpg");
    }
</style>
</body>
</html>