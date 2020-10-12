<?php
echo "<pre>";
require_once "../database.php";
$db = new \Database\database("uzdirectory");

$news_items = $db->sql("SELECT title FROM world_news limit 20;");

 foreach ($news_items as $item){

     $title = $item['title'];
     $new_title = str_replace("Virginia", 'Vir***',$title);

     echo "<hr>{$new_title}<hr>";
 }
?>


