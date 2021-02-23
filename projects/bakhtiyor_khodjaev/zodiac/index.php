<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="script.js"></script>
</head>

<?php

$zadioks = [
    'https://pixfeeds.com/images/18/463850/1200-538872042-zodiac-sign-leo.jpg',
    'https://static.langimg.com/thumb/msid-75032511,width-540,resizemode-4/samayam-tamil.jpg',
    'https://i.pinimg.com/originals/6e/9b/37/6e9b3747b7bbc6f551deb0b2e9044ce5.jpg',
    'https://i.pinimg.com/236x/9f/48/d5/9f48d5ff801ade932e205d2c6a07e101.jpg',
    'https://cdn.images.express.co.uk/img/dynamic/130/590x/secondary/Daily-horoscope-May-29-star-sign-reading-astrology-zodiac-forecast-today-1890250.jpg?r=1559079184006'
];
?>
<body>

<div id="container-fluid"></div>
<div class="salovha">
    <h3>WELCOME TO THE ZODIACS</h3>
    <div>
        <select class="garaskop_nomlari" name="garaskop_nomlari">
           <option>Aries</option>
           <option>Taurus</option>
           <option>Gemini</option>
           <option>Cancer</option>
           <option>Leo</option>
           <option>Virgo</option>
           <option>Libra</option>
           <option>Scorpio</option>
           <option>Sagittarius</option>
           <option>Capricon</option>
           <option>Aquarius</option>
           <option>Pisces</option>
           <option>Other</option>
            <input value=""  data-date-format="YMD" id="pick_date" type="date" name="pick_date">
            <button class="btn btn-success">Search</button>
        </select>
    </div>
</div>
<div class="garaskoplar">

    <?php
    foreach ($zadioks as $zadiok){
    ?>
    <div class="zadiaklar1">
        <div class="zadiak">
            <img src="<?php echo $zadiok ?>">
        </div>
    </div>
        <?php
    }
    ?>
</div>

</body>
</html>