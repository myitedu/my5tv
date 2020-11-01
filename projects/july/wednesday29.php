<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
</head>
<body>
<?php
function returnMiddleNumber($a, $b, $c)
{
    $large_number = null;
    $small_number = null;
    $middle_number = null;
    //20 100 200
    if ($b > $a && $b < $c) {
        $middle_number = $b;
    }
    if ($b < $a && $b > $c) {
        $middle_number = $b;
    }
    if ($a === $b && $b === $c) {
        $middle_number = $b;
    }
    if ($a === $b && $b !== $c) {
        $middle_number = $b;
    }
    if ($b === $c & $a !== $b) {
        $middle_number = $b;
    }
    if ($a > $b && $a < $c) {
        $middle_number = $a;
    }
    if ($c < $b && $b < $c) {
        $middle_number = $c;
    }
    if ($a == $c && $c !== $b){
        $middle_number = $c;
    }
    if ($c>$b && $c<$a){
        $middle_number = $c;
    }
    if ($c<$b && $c>$a){
        $middle_number = $c;
    }
    if ($b>$a && $b>$c){
        $middle_number = $b;
    }
    if ($b>$a && $b>$c){
        $middle_number = $b;
    }
    if ($c<$b && $c>$a){
        $middle_number = $c;
    }
    if ($a<$b && $a>$c){
        $middle_number = $a;
    }
    return $middle_number;
}

$number1 = $_POST['number1'] ?? 0;
$number2 = $_POST['number2'] ?? 0;
$number3 = $_POST['number3'] ?? 0;
$number1 = (int)$number1;
$number2 = (int)$number2;
$number3 = (int)$number3;
$result = returnMiddleNumber($number1, $number2, $number3);
$class = null;
if($number1 == $result){
    $class = "arrow1";
}
if($number2 == $result){
    $class = "arrow2";
}
if($number3 == $result){
    $class = "arrow3";
}

?>



<div class="container-fluid">
    <div id="form">
        <h2><?=$result?></h2>
        <form method="post">
            <h1>Numbers Form</h1>
            <p>$a: <input value="<?= $number1 ?>" name="number1" type="number">
                <img class="arrow arrow1" src="https://www.clker.com/cliparts/t/6/G/v/u/u/red-left-arrow-hi.png">
            </p>
            <p>$b: <input value="<?= $number2 ?>" name="number2" type="number">
                    <img class="arrow arrow2"  src="https://www.clker.com/cliparts/t/6/G/v/u/u/red-left-arrow-hi.png">
            </p>
            <p>$c: <input value="<?= $number3 ?>" name="number3" type="number">
                    <img class="arrow arrow3"  src="https://www.clker.com/cliparts/t/6/G/v/u/u/red-left-arrow-hi.png">
            </p>
            <p>
                <button type="submit">Submit</button>
            </p>
        </form>

    </div>
    <div id="result">
        <?php
        echo $result;
        ?>
    </div>

</div>



<style>
    .arrow{
        width: 50px;
        display: none;
        float: right;
    }
    .container-fluid {
        background-color: #f5f5f5;
    }

    #form {
        width: 50%;
        float: left;
        border: 1px solid black;
        padding: 10px;
        height: 300px;
    }

    #result {
        width: 50%;
        float: right;
        border: 1px solid black;
        padding: 10px;
        height: 300px;
        font-size: 300%;
        color: red;
        text-align: center;
    }

</style>
</body>
</html>



