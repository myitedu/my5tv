<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
<?php
$degree = rand(10,100);
?>
<div class="container-fluid">

<div id="temperature">
    <div id="degree"></div>
    <div id="form">
        <select id="temperature_degree">
            <?php
            $degrees = range(-20, 120);
            foreach ($degrees as $degree){
                echo "<option value='$degree'>$degree</option>";
            }
            ?>

        </select>
       <input id="temperature_degree2" maxlength="1" required="required" min="0" max="9" type="number" placeholder="temperature">
        <button class="btn btn-success" id="btn_update">UPDATE</button>
    </div>
</div>

</div>

</body>
</html>