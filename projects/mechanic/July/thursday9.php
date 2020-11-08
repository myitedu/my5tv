<?php
$color = $_GET['color']??'white';
setcookie('color', $color,time()+10,'/');
header("Location: monday6.php");
exit;