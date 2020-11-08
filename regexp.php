<?php
#Phone
#Email
#SSN
#Serial Numbers or Activiation Codes
#Custom patterned texts
#URLs
#File Paths
#
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php
$alert = "alert-success";
$msg = null;
$phone = $_GET['phone']??null;
$email = $_GET['email']??'jon@myitedu.us';
$is_phone_valid = preg_match("#\([0-9]{3}\) ([0-9]{3})-([0-9]{4})#",$phone,$matched);
$is_email_valid = preg_match("#(^[a-zA-Z]{3,10})@([a-zA-Z]{3,10})\.(com|net|uz|ru|gov|edu|org)$#",$email,$matched2);
$is_ssn_valid = preg_match("#(^[a-zA-Z]{3,10})@([a-zA-Z]{3,10})\.(com|net|uz|ru|gov|edu|org)$#",$ssn,$matched3);
echo "<pre>";
var_dump($is_email_valid);
echo "</pre>";
echo "<hr>";
?>
<form action="regexp.php" method="get">
    <?if($msg):?><div class="alert <?=$alert?>"><?=$msg?></div><?endif;?>
    <p>Phone: <input value="<?=$phone?>" name="phone" type="tel" placeholder="Your Phone Number"></p>
    <p>Email: <input value="<?=$email?>" name="email" type="text" placeholder="Your Email Address"></p>
    <p><button type="submit">Submit</button></p>
</form>
</body>
</html>
