<?php
$cookie_value = "Mechanic".rand(1,100);
setcookie("sunnat",$cookie_value,time()+3600,'/');
header("Location: getcookie.php");
exit("You are being redirected to getcookie.php")
?>

