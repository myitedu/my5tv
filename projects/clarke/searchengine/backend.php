<?php
$keyword = $_POST['keyword']??null;
if (empty($keyword)){
    exit("Your keyword is empty");
}

require_once "../../../database.php";
$db = new \Database\database("myitedu");
$sql = "SELECT * FROM airports WHERE city like '%$keyword%' group by city, country";
$cities = $db->sql($sql);
foreach($cities as $city){
    $img_url = "https://i2.wp.com/roadsandkingdoms.com/uploads/2019/02/Tashkent-Spread.jpg?w=2400&quality=95&strip=color&ssl=1";
    echo "<p class='found_items'><img src='$img_url'> {$city['city']}, {$city['country']}</p>";
}
