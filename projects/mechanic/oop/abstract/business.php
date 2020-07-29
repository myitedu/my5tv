<?php
namespace Tashevs;
abstract class Business{
    public $location;
    public function __construct()
    {
        $this->location = "Bukhara downtown";
    }

    public function dokoni_sotib_oldik(){
        $dokon_name = "Tashevlar tijorat dokoni";
        return "Dadam dokonnini sotib oldilarmi - $dokon_name in " .$this->location;
    }
}