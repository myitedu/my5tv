<?php
class Zavod
{
# __call() Method
/*public function __call($name, $arguments)
{
     if ($name =='checkin'){
         return $this->checkin();
    }
    return null;
}
*/
/*public static function __callStatic($name, $arguments)
{
 if ($name == 'work'){
     return self::clients();
 }
 return "This method does not exist <hr>";
}
*/
 /*

    public function __get($name)
    {
        if ($name =='price'){
            //return $this->price;
        }
        return null;
    }

    public function __set($name, $value)
    {
       return $this->$name = $value;
    }
*/
 /*
    public function __isset($name)
    {
        if (isset($this->$name)){
            return true;
        }
        return false;
    }
    public function __unset($name)
    {
        if (isset($this->$name)){
            echo 'This property is set';
            return false;
        }
        echo 'This property is not set';
        return false;
    }
 */

    public $name = 'Jon Toshmatov';
    public $location;
    public $secret = "abc123";
    public $country = 'Uzb';
    public function work(){
        return "Working";
    }

public function __sleep()
{
    return ['name','location','country'];
}

public function __wakeup()
{
    $this->location = "Bukhara";
    $this->name = "Sunnat Tashev";
    $this->country  = 'Uzbekistan';
    $this->secret = "*******";
}

}

$zavod = new Zavod();

$obj = serialize($zavod);

$obj2 = unserialize($obj);

echo "<pre>";
var_dump($obj2);




