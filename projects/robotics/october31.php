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
<?php
$number = $_GET['number']??1;
?>
<form>
    Select:

    <select name="number">
        <?php
        for($i=1; $i<6; $i++) {
            if ($i==$number){
                echo "<option selected value=\"$i\">$i</option>";
            }else{
                echo "<option value=\"$i\">$i</option>";
            }

        }
        ?>


    </select>

    <button type="submit">GO</button>
    <hr>

    <?php
    echo "You selected: ". $number;
    ?>

</form>

</body>
</html>