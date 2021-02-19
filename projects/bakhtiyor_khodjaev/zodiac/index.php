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
    $zodiaks1 = [
      'https://media.istockphoto.com/vectors/zodiac-sign-aries-vector-id539240628?k=6&m=539240628&s=612x612&w=0&h=q3z6Zi3PEdIGwF3BH5F6jrcLYxmOuFKhNIus0FesWr8=',
      'https://media.istockphoto.com/vectors/zodiac-sign-taurus-vector-id539017004?b=1&k=6&m=539017004&s=612x612&w=0&h=OvPYCD3rdC36TGJEgiDRALpUWl3vho-5BVLZoFtLkoY=',
      'https://media.istockphoto.com/vectors/zodiac-sign-cancer-vector-id538871860?k=6&m=538871860&s=612x612&w=0&h=TBUm_5jBozFkuh7aooHi-NGb83wfldZ2ZT5utNmmBgU=',
      'https://media.istockphoto.com/vectors/zodiac-sign-pisces-vector-id539016914?k=6&m=539016914&s=612x612&w=0&h=sfbFVw3F2YMoZErQWWPO5370vRVbueoSeGs72A2sHtA=',
      'https://www.thesun.co.uk/wp-content/uploads/2020/07/GettyImages-539016968-1.jpg?strip=all&w=960'
    ]
?>
<?php
    $zodiaks4 = [
            'https://pixfeeds.com/images/18/463850/1200-538872042-zodiac-sign-leo.jpg',
            'https://lh3.googleusercontent.com/proxy/--vQfqYzPHf5GJcBFkVh7-pquOsucL00dELFzoCJYoT9cNfkG5o6hY2_EWyqg5az1bmt18SerlOVgp8xw0KMvr0nYBwBMIowTisfzq9JPm6ZVKECWQ',
            'https://i.pinimg.com/originals/6e/9b/37/6e9b3747b7bbc6f551deb0b2e9044ce5.jpg',
            'https://i.pinimg.com/236x/9f/48/d5/9f48d5ff801ade932e205d2c6a07e101.jpg',
            'https://cdn.images.express.co.uk/img/dynamic/130/590x/secondary/Daily-horoscope-May-29-star-sign-reading-astrology-zodiac-forecast-today-1890250.jpg?r=1559079184006'
    ]
?>
<body>

<div id="container-fluid">
    <div class="salovha"><h1>WELCOME TO THE ZODIACS</h1></div>
    <?php
    foreach ($zodiaks1 as $zodiak1){
    ?>
    <div class="zodiak1">
        <img src="<?php echo $zodiak1 ?>">
    </div>
    <?php
    }
    ?>

    <div class="zodiak2">
        <img src="https://static.langimg.com/thumb/msid-75032511,width-540,resizemode-4/samayam-tamil.jpg">
    </div>

    <div class="forma">
        <form>
            <p>
                <label><input name="zodiac_name" type="text" placeholder="Zodiac name"></label>
                <button class="btn btn-success">GO</button>
            </p>
        </form>
    </div>
    <?php
    foreach ($zodiaks4 as $zodiak4){
        ?>
        <div class="zodiak4">
            <img src="<?php echo $zodiak4 ?>">
        </div>
        <?php
    }
    ?>
</div>

</body>
</html>