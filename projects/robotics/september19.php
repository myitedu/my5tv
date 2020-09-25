<?php
class Calculator{
    public function add($a, $b){
        return $a + $b;
    }
    public function substrct($a, $b){
        return $a - $b;
    }
    public function multiply($a, $b){
        return $a * $b;
    }
    public function divide($a, $b){
        return $a / $b;
    }
    public function remainder($a, $b){
        return $a % $b;
    }

    public function task2($a, $b){
        $num1 = $this->multiply($a, $b);
        $num2 = $this->divide($a, $b);
        return ($num1 + $num2) / 2;
    }
}

$calculator = new Calculator();
$numbers = range(1,100);
foreach ($numbers as $row=>$number){
    $rand = rand(2,10);
    echo "Number: $number: <br>";
    echo "$number + $rand = " .$calculator->add($number, $rand)."<hr>";
    echo "$number - $rand = " .$calculator->substrct($number, $rand)."<hr>";
    echo "$number * $rand = " .$calculator->multiply($number, $rand)."<hr>";
    echo "$number / $rand = " .$calculator->divide($number, $rand)."<hr>";
    echo "$number % $rand = " .$calculator->remainder($number, $rand)."<hr>";
    echo "Task #2: " .$calculator->task2($number, $rand)."<hr>";
}