<?php
$parms = $_POST??null;
require_once "database.php";
$db = new \Database\database("myitedu");
$td_title = $parms['td_title'];
$td_person_name = $parms['td_person_name'];
$td_wish = $parms['td_wish'];
$td_signature = $parms['td_signature'];
$inp_year = $parms['inp_year'];
$inp_month = $parms['inp_month'];
$inp_date = $parms['inp_date'];
$inp_year = (int) $inp_year;
$inp_month = (int) $inp_month;
$inp_date = (int) $inp_date;
$sent_at = "$inp_year/$inp_month/$inp_date 12:00:00";
//Add Slashes
$td_title = addcslashes($td_title,"'");
$td_person_name = addcslashes($td_person_name,"'");
$td_wish = addcslashes($td_wish,"'");
$td_signature = addcslashes($td_signature,"'");

$sql = "INSERT INTO holiday_cards (td_title, td_person_name, td_wish, td_signature, sent_at) VALUES ('$td_title','$td_person_name','$td_wish','$td_signature','$sent_at');";
$db->sql($sql);
echo $sql;
