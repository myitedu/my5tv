<?php
$parms = $_POST??null;
//truckloadsid
//truckid

$truckid = $parms['truckid']??null;
$truckloadsid = $parms['truckloadsid']??null;

$truckloadsid = (int) $truckloadsid;
$truckid = (int) $truckid;


if (empty($parms)){
    exit(null);
}

$inputs = $parms['formdata'];

$fields = explode(',',$inputs);
$items = [];
foreach ($fields as $num=>$field){
    $name = explode(":", $field);
    if (isset($name[0]) && isset($name[1])){
        $items[$name[0]] = $name[1];
    }
}

require_once "database.php";
$db = new \Database\database("myitedu");

//Update the trucks table
$sql =  "UPDATE trucks set name='{$items['truck_company']}', driver_name='{$items['driver_name']}' WHERE id = $truckid;";
$loads = $db->sql($sql);

//Update the truckloads table
//UPDATE truckloads set `truck_id`='3', `from`='Brooklyn', `to`='Boston', `distance`=235, `fee`=2.34 WHERE id = 3;

$distance = (float) $items['distance'];
$fee = str_replace('$', '',$items['fee']);

$sql =  "UPDATE truckloads set `truck_id`='{$truckid}', `from`='{$items['from']}', `to`='{$items['to']}', 
`distance`={$distance}, 
`fee`={$fee} WHERE id = $truckloadsid;";
$truckloads = $db->sql($sql);

echo $sql;



