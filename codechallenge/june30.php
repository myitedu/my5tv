<?php
class Uzbekistan{


    public function applyForVisa(int $limit){
        return $limit;
    }

}

$uzb = new Uzbekistan();
$result = $uzb->applyForVisa(98793);
var_dump($result);





