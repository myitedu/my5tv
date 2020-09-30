<?php
error_reporting(0);
$mysql = mysqli_connect("localhost","root","","myitedu");
if (!$mysql && !isset($mysql->connect_error)){
    exit("There is a DB connection error: DB connection is not established");
}

$sql = "SELECT * FROM world_news WHERE title like '%Jon%';";
$results = $mysql->query($sql);

echo "<pre>";
if (!$results->num_rows){
    exit("No records were found by that keyword");
}

while ($row=$results->fetch_assoc()){
   print_r($row);
   echo "<hr>";
}
