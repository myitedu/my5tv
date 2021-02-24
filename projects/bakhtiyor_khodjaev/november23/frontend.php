<<<<<<< HEAD
<?php
$country = "Uzbekistan";
$name = "Bakhtiyor";
$study = "MYITEDU";
$kids = 6;
$bio = "hello my name is $name.";
$bio .= " I have $kids kids. I work at uber and free time I study IT at $study. I from $country";
$bio = str_replace("uber","microsoft",$bio);
$bio = explode(' ', $bio);
echo "<pre>";
foreach ($bio as $item){
    $item = str_replace("a","<span>a</span>",$item);
    echo $item."<hr>";
}
?>

<style>
    span{
        background-color: #1a4f07;
        color: #7abaff;
    }
</style>
=======
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
<h4>Frontend</h4>
<form method="post" action="backend.php">

    <p>
        Text: <input name="text" placeholder="Your Text">
        <button type="submit">GO</button>
    </p>
</form>
</body>
</html>
>>>>>>> e046f31f9900f91c7ae945b3fd22372e157109e2
