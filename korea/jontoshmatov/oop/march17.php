<?php
ini_set("display_errors",1);
class Korea{

public function travel(){
    echo "traveling to South Korea";
}

public function __clone(){
   exit("Sorry no cloning the object");
}

}

$korea = new Korea();
$korea2 = clone $korea;

echo $korea2->travel();
