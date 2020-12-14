<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<?php
#/img/light_bulb_off.png
#/img/light_bulb_off.png
$status = $_GET['status']??'off';
$img = "/img/light_bulb_off.png";
$btn_text = "ON";

if ($status=='off'){
    $img = "/img/light_bulb_on.png";
    $status = "on";
    $btn_text = "OFF";
}else{
    $img = "/img/light_bulb_off.png";
    $status = "off";
    $btn_text = "ON";
}

?>
<div id="jon">
    <img id="light_bulb" src="<?php echo $img;?>">
</div>
<form action="november20.php">
    <div id="buttons">
        <input type="hidden" name="status" value="<?php echo $status;?>">
        <button  type="submit" id="switch"><?php echo $btn_text; ?></button>
    </div>
</form>


<style>

    #light_bulb{
        width: 100%;
    }
    #buttons{
        width:400px;
        height: auto;
        border: 1px solid black;
        margin: 5px auto;
        padding:5px;
        text-align: center;
    }
    .jonclassopen{
        background-color: #00ff02;
    }
    .jonclassclose{
        background-color: #be0101;
    }
    #jon{
        width:400px;
        height:  auto;
        border: 1px solid black;
        margin: auto;
    }
</style>

</body>
</html>