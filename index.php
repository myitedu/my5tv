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
date_default_timezone_set("America/New_York");
$mydate = $_GET['datetime']??date('Y-m-d');
$oneday = 24 * 3600;
$onemonth = $oneday * 30;
$oneyear = $onemonth * 12;

$total_year =  time() / $oneyear;

echo time()." = ".round($total_year)." years";

?>

<form>
    <p>
        <input type="date" name="datetime" value="<?=$mydate?>" placeholder="Enter Your DOB">
        <button type="submit">GO</button>
    </p>
</form>
</body>
</html>

