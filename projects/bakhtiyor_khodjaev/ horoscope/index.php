<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>


<?php
require_once "api.php";
$zodiakname = $_GET ['zodiakname']??null;
$zodiak_id = get_zodiakname($zodiakname);

echo $zodiak_id;

?>

<?php
$id = $_GET['id'] ?? 0;
$id = (int)$id;
$zodiakname = ['aries', 'taurus', 'gemini', 'cancer', 'leo', 'virgo', 'libra', 'scorpio', 'sagittarius', 'capricon', 'aquarius', 'pisces'];
$zadiaks_img = [
    'https://media.istockphoto.com/vectors/zodiac-sign-aries-vector-id539240628?k=6&m=539240628&s=612x612&w=0&h=q3z6Zi3PEdIGwF3BH5F6jrcLYxmOuFKhNIus0FesWr8=',
    'https://media.istockphoto.com/vectors/zodiac-sign-taurus-vector-id539017004?b=1&k=6&m=539017004&s=612x612&w=0&h=OvPYCD3rdC36TGJEgiDRALpUWl3vho-5BVLZoFtLkoY=',
    'https://cdn.images.express.co.uk/img/dynamic/130/590x/secondary/Daily-horoscope-May-29-star-sign-reading-astrology-zodiac-forecast-today-1890250.jpg?r=1559079184006',
    'https://media.istockphoto.com/vectors/zodiac-sign-cancer-vector-id538871860?k=6&m=538871860&s=612x612&w=0&h=TBUm_5jBozFkuh7aooHi-NGb83wfldZ2ZT5utNmmBgU=',
    'https://pixfeeds.com/images/18/463850/1200-538872042-zodiac-sign-leo.jpg',
    'https://static.langimg.com/thumb/msid-75032511,width-540,resizemode-4/samayam-tamil.jpg',
    'https://i.pinimg.com/originals/6e/9b/37/6e9b3747b7bbc6f551deb0b2e9044ce5.jpg',
    'https://www.thesun.co.uk/wp-content/uploads/2020/07/GettyImages-539016968-1.jpg?strip=all&w=960',
    'https://media.istockphoto.com/vectors/zodiac-sign-sagittarius-vector-id539016936?k=6&m=539016936&s=612x612&w=0&h=PfB1dd7M3coqaYMUy07UO_LFIVFNl_7a0Uyz27iaFD4=',
    'https://media.istockphoto.com/vectors/zodiac-capricorn-sign-vector-id538871926?k=6&m=538871926&s=612x612&w=0&h=eO4_0uBOW7UlgxooPrjw44F7Gi_J6WX4NSGtFWLkDnw=',
    'https://media.istockphoto.com/vectors/zodiac-sign-aquarius-vector-id539240576?k=6&m=539240576&s=170667a&w=0&h=Dig-AzLXrEeVA4s3e7WX7ECTMlcPmuR6UuWq8ouQ_QI=',
    'https://media.istockphoto.com/vectors/zodiac-sign-pisces-vector-id539016914?k=6&m=539016914&s=612x612&w=0&h=sfbFVw3F2YMoZErQWWPO5370vRVbueoSeGs72A2sHtA='
];

if ($id > count($zodiakname) - 1) {
    $id = 0;
}

echo $id;
?>

<div class="container-fluid">
    <div class="salovha">
        <h3>WELCOME TO THE ZODIACS</h3>
        <div>
            <form action="index.php" method="get">

                <input class="pick_date" value="<?php echo $zodiakname;?>" data-date-format="YMD" id="pick_date" type="date" name="zodiakname">
                <button class="btn btn-success" type="submit">Search</button>
            </form>

            <div class="ota">
                <div class="zadiak_top">
                    <a href="index.php?id=0">
                        <div class="zodiacs zadiak_aries"></div>
                    </a>
                    <a href="index.php?id=1">
                        <div class="zodiacs zadiak_taurus"></div>
                    </a>
                    <a href="index.php?id=2">
                        <div class="zodiacs zadiak_gemini"></div>
                    </a>
                    <a href="index.php?id=3">
                        <div class="zodiacs zadiak_cancer"></div>
                    </a>
                    <a href="index.php?id=4">
                        <div class="zodiacs zadiak_leo"></div>
                    </a>
                </div>
                <div class="display">
                    <div class="display_title"></div>
                        <img src="<?php echo $zadiaks_img[$id];?>">
                </div>
                <div class="zadiak_middle">
                    <a href="index.php?id=5">
                        <div class="zodiacs zadiak_virgo left"></div>
                    </a>
                    <a href="index.php?id=6">
                        <div class="zodiacs zadiak_libra right"></div>
                    </a>
                </div>
                <div class="zadiak_bootom">
                    <a href="index.php?id=7">
                        <div class="zodiacs zadiak_scorpio"></div>
                    </a>
                    <a href="index.php?id=8">
                        <div class="zodiacs zadiak_sagittarius"></div>
                    </a>
                    <a href="index.php?id=9">
                        <div class="zodiacs zadiak_capricon"></div>
                    </a>
                    <a href="index.php?id=10">
                        <div class="zodiacs zadiak_aquarius"></div>
                    </a>
                    <a href="index.php?id=11">
                        <div class="zodiacs zadiak_pisces"></div>
                    </a>
                </div>
            </div>
        </div>


</body>
</html>
