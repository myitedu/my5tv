<?php
session_start();
$user = $_SESSION['user'];
if (empty($user)){
    $msg = "You must login to display this page";
    header("Location: login.php?msg=$msg");
    exit($msg);
}
?>
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
require_once "database.php";
$obj = new \Database\database('myitedu');
$sql = "SELECT * FROM likes;";
$likes = $obj->sql($sql);
$all_likes = array_column($likes,"likes");
$total = array_sum($all_likes);

$percents = [];

foreach ($likes as $like){
    if ($like['likes']>0) {
        $jon = round($like["likes"] / $total * 100);
        $percents[$like['blog_id']] = $jon;
    }
}
echo "<pre>";
print_r($percents);
echo "<hr>";
echo $total;

?>
</body>
</html>
