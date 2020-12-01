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
$phone =  $_GET['phone']??null;
?>
<h2>Phone Validator</h2>
<hr>
<form method="get" action="strings.php">
    <p>
        <label>
            Your Phone: <input value="<?php echo $phone; ?>" name="phone" placeholder="+1 (347) 576-4951">
        </label>
    </p>
    <p><button type="submit">Validate</button></p>
</form>
<?php

if (!$phone){
    exit("Please enter your phone number above");
}
$pattern = "#\+(1|998|380|7) \([0-9]{3}\) ([0-9]{3})-([0-9]{4})$#";
$validate_phone = preg_match($pattern, $phone, $matches);
echo "<pre>";
if ($validate_phone){
    echo "<h1>Your Phone is validated and looks good</h1>";
}else{
    echo "<h1>Your Phone is BAD</h1>";
}

echo "<hr>";
print_r($matches);
?>

</body>
</html>