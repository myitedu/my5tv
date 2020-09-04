<?php
namespace Automobile;
//require_once 'standards.php';
require_once 'advices.php';
require_once 'tools.php';
class Car extends \Advices {
    use \Tools;
    public $model, $make, $year, $price, $color;
    protected $engine, $hoursePower;
    private $companySecret;
    public $parms;
    public function __construct($model='Alfa Romeo')
    {
        $this->parms = $_GET;
        $this->make = $this->parms['make']??"Alfa Romeo";
        $this->model = $this->parms['model']??"Stelvio";
    }
    public function drive(){
        return "The {$this->model} is driving";
    }
    public function __destruct()
    {
        unset($this->parms);
        //unset($mysq_connect);
    }
    public static function bildMe(){
        return "This ". __FUNCTION__. " method is static";
    }

}
