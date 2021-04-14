<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo Gallery</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/april13.css">
</head>
<body>
<?php
$id = $_GET['id']??0;
$id = (int) $id;
$cities = [
    0=>[
        'name' => 'Miami',
        'img' => 'https://blog-www.pods.com/wp-content/uploads/2019/08/MG_6_1_Miami.jpg'
    ],
    1=>[
        'name' => 'Dubai',
        'img' => 'https://www.fairobserver.com/wp-content/uploads/2020/06/Dubai-1.jpg'
    ],
    2=>[
        'name' => 'London',
        'img' => 'https://lp-cms-production.imgix.net/image_browser/london-big-ben.jpg'
    ],
    3=>[
        'name' => 'New York',
        'img' => 'https://cdn.getyourguide.com/img/location/54621e3965f1c.jpeg/88.jpg'
    ],
    4=>[
        'name' => 'Tashkent',
        'img' => 'http://media.iceportal.com/126343/photos/70704313_XL.jpg'
    ],
];
$city_name = $cities[$id]['name'];
if ($id>=count($cities) || $id<0){
    $id = 0;
}
?>
<div id="city_photos">
<div class="top_col">
    <nav>
        <a class="btn btn-dark" title="Dubai Photos" href="april13.php?id=1">Dubai</a>
        <a class="btn btn-dark" title="London Photos" href="april13.php?id=2">London</a>
        <a class="btn btn-dark" title="New York Photos" href="april13.php?id=3">New York</a>
        <a class="btn btn-dark" title="Tashkent Photos" href="april13.php?id=4">Tashkent</a>
    </nav>

</div>
<div class="middle_col">
    <div class="city_number"><?php echo $id;?></div>
    <img src="<?php echo $cities[$id]['img'];?>">
</div>
<div class="bottom_col">
    <span class="city_name"><?php echo $city_name;?></span>
</div>
</div>
</body>
</html>