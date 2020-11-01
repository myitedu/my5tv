<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>
    <p>
        <input name="number1" type="number" placeholder="Number 1">
        <input name="operator" placeholder="+ or - or / or *">
        <input name="number2" type="number" placeholder="Number 2">
        <button type="submit">Calculate</button>
    </p>
</form>
<div id="result">
    <?php
        $number1 = $_GET['number1']??5;
        $number2 = $_GET['number2']??5;
        $operator = $_GET['operator']??'+';
        $result = eval("return ". $number1.$operator.$number2.";");
        echo "$number1 $operator $number2 = $result";
    ?>
</div>
</body>
</html>
