<?php
namespace Automobile;
require_once "car.php";
require_once "standards.php";
class bmw extends Car implements \Standards
{
public function controlEmission()
{
    // TODO: Implement controlEmission() method.
}



}
$bmw = new bmw();

echo $bmw->buildEngine();