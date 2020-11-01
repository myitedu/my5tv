<?php
namespace Tashevs;
include "abstract/business.php";
include "traits/tools.php";
class Otaona extends Business {
    use tools;

    public function katta_qilish(){
        echo "<hr>Farzandlarni katta qilish<hr>";
    }
    public function uyli_joyli_qilish(){
        echo "<hr>Farzandlarni uyli_joyli_qilish<hr>";
    }

    final public function DoNotChangeYourReligion(){
        return "My final decision";
    }

}

