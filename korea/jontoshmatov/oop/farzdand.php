<?php
ini_set("display_errors",1);
include_once "advices.php";
include_once "business.php";
include_once "grandparents_advices.php";

class Farzand extends Business implements Advices, Grandparents_Advices {
    public function study()
    {
        // TODO: Implement study() method.
    }

    public function getAGoodJob()
    {
        // TODO: Implement getAGoodJob() method.
    }

    public function openBank()
    {
        parent::openBank(); // TODO: Change the autogenerated stub
    }

    public function bringGrandChildren()
    {
        // TODO: Implement bringGrandChildren() method.
    }
}

$son = new Farzand();


