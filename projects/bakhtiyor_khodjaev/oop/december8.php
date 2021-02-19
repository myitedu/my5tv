<?php
class animal{
    public function sleep(){
        echo "animal is sleeping";
    }
    public function play(){
        echo "animal is playing";
    }
}
$animal = new animal();
$animal->play();