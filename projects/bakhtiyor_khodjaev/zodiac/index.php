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
<?php

$zadiaks = [
    'https://media.istockphoto.com/vectors/zodiac-sign-aries-vector-id539240628?k=6&m=539240628&s=612x612&w=0&h=q3z6Zi3PEdIGwF3BH5F6jrcLYxmOuFKhNIus0FesWr8=',
    'https://media.istockphoto.com/vectors/zodiac-sign-taurus-vector-id539017004?b=1&k=6&m=539017004&s=612x612&w=0&h=OvPYCD3rdC36TGJEgiDRALpUWl3vho-5BVLZoFtLkoY=',
    'https://media.istockphoto.com/vectors/zodiac-sign-cancer-vector-id538871860?k=6&m=538871860&s=612x612&w=0&h=TBUm_5jBozFkuh7aooHi-NGb83wfldZ2ZT5utNmmBgU=',
    'https://media.istockphoto.com/vectors/zodiac-sign-pisces-vector-id539016914?k=6&m=539016914&s=612x612&w=0&h=sfbFVw3F2YMoZErQWWPO5370vRVbueoSeGs72A2sHtA=',
    'https://www.thesun.co.uk/wp-content/uploads/2020/07/GettyImages-539016968-1.jpg?strip=all&w=960'
];
?>
<body>
<div id="container-fluid">
    <div class="salovha">
        <h3>WELCOME TO THE ZODIACS</h3>
        <div>
            <select id="garaskop_nomlari" name="garaskop_nomlari">
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
                <input class="pick_date" value="" data-date-format="YMD" id="pick_date" type="date" name="pick_date">
                <button class="btn btn-success">Search</button>
            </select>
        </div>
    </div>
    <div class="garaskoplar">
        <?php
        foreach ($zadioks as $zadiok) {
            ?>
            <div class="zadiaklar1">
                <div class="zadiak">
                    <img src="<?php echo $zadiok ?>">
                </div>
            </div>
            <?php
        }
        ?>

        <div class="zadiaklar2">
            <div class="zadiak zadiak_chap">
                <img src="https://media.istockphoto.com/vectors/zodiac-sign-aquarius-vector-id539240576?k=6&m=539240576&s=170667a&w=0&h=Dig-AzLXrEeVA4s3e7WX7ECTMlcPmuR6UuWq8ouQ_QI=">
            </div>
            <div class="zadiak zadiak_ong">
                <img src=" https://media.istockphoto.com/vectors/zodiac-capricorn-sign-vector-id538871926?k=6&m=538871926&s=612x612&w=0&h=eO4_0uBOW7UlgxooPrjw44F7Gi_J6WX4NSGtFWLkDnw=">
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
        foreach ($zadiaks as $zadiak) {
            ?>
            <div class="zadiaklar3">
                <div class="zadiak">
                    <img src="<?php echo $zadiak ?>">
                </div>
            </div>
            <?php
        }
        ?>

    </div>
    <div class="ekran">
        <div class="ekran1">

            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.


        </div>
    </div>
</div>
</body>
</html>