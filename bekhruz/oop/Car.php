<?php
namespace vehicles;
class Car
{
    public function __construct(){
        echo "I am a construct<hr>";
    }

    public function drive(){
        echo "Driving the car<hr>";
    }

    public static function backup(){
        echo "Backing up the car<hr>";
    }

    public function __destruct(){
        echo "I am a destruct<hr>";
    }
}

Car::backup();