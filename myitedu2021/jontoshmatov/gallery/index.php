<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/scripts.js"></script>
</head>
<body>
<?php
$city_number = $_GET['city_number']??0;
$cities = [
    [
        'name' => 'Dubai',
        'img' => 'https://lh3.googleusercontent.com/proxy/buRcnXfPmBvZ9y6xdvOZ_SsmETWwhUHgfXGsSlCsrm2qqsz_rio22Lad9lfD-5If_t4kLp2IEUcNe3CziQo8KxjAsPcy2zvD8gSoOd3lXssQkQO8vxK2Wxmb9Ql4J_Btz-hg8A',
        'description' => "Dubai - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown"
    ],
    [
        'name' => 'New York',
        'img' => 'https://image.newyorkcity.ca/wp-content/uploads/2012/09/Times-Square-in-New-York-Billboards.jpg',
        'description' => "New York -  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown"
    ],
    [
        'name' => 'Moscow',
        'img' => 'https://media.timeout.com/images/105237890/image.jpg',
        'description' => "Moscow - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown"
    ],
    [
        'name' => 'Rome',
        'img' => 'https://media.tacdn.com/media/attractions-splice-spp-674x446/06/6c/2c/70.jpg',
        'description' => "Rome - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown"
    ],
    [
        'name' => 'Tashkent',
        'img' => 'https://www.travel-tramp.com/wp-content/uploads/2017/05/IMG_1821-3.jpg',
        'description' => "Tashkent - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown"
    ],
    [
        'name' => 'Cairo',
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3t2zE6O3a_ub-MjTYID3RGtwvNk_0GyiyNQ&usqp=CAU',
        'description' => "Cairo - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown"
    ],
    [
        'name' => 'Istanbul',
        'img' => 'https://www.advertisingweek360.com/wp-content/uploads/2019/05/169istanbul-1170x600.jpg',
        'description' => "Istanbul - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever 
        since the 1500s, when an unknown What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
 into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
    ],
];

?>

<div id="mytitle">
    MY Favorite Cities
</div>

<div id="mygallery">
    <div class="left_window">

        <?php
            foreach ($cities as $number=>$city){
        ?>
        <hr>
        <a href="index.php?city_number=<?php echo $number?>"><img class="city_thumbnail" src="<?php echo $city['img']?>"></a>
        <hr>
        <?php
            }
        ?>


    </div>
    <div class="right_window">
        <h4 class="city_large_title"><?php echo $cities[$city_number]['name'];?></h4>
        <img class="city_large"
             src="<?php echo $cities[$city_number]['img'];?>">
    </div>
    <div class="clearfix"></div>
    <div class="right_window_bottom"><?php echo $cities[$city_number]['description'];?></div>

</div>

</body>
</html>