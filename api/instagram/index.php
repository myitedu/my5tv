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
require_once "getuserid.php";
require_once "getuserposts.php";
$username = $_GET['username']??'myitedu';
$user_id = get_userid($username); //API 1
$posts = get_userposts($user_id); //API 2
?>
<div id="wrapper">
<div class="title">Instagram Photos</div>
    <hr>
    <form action="index.php" method="get">
        <p>
            <input value="<?php echo $username;?>" type="text" name="username" placeholder="Instagram Username">
            <button class="btn btn-success" type="submit">GO</button>
        </p>
    </form>
    <?php
    foreach ($posts as $post){
        $description = "Total likes: {$post['like_count']} | Total Comments: {$post['coment_count']}";
    ?>
<div class="photo"><img src="<?php echo $post['thumbnail_url'];?>"><div class="description">
        <?php echo $description;?>
    </div></div>
<?php
    }
?>

</div>
<style>

    .photo:hover > .description{
        visibility: visible;
        cursor: pointer;
    }

    .description:first-letter{
        font-size: 20px;
        font-weight: bolder;
        font-family: "Lucida Handwriting";
        color: #00c882;
    }
    .description{
        width: 150px;
        position: relative;
        bottom: 48px;
        left: -2px;
        color: #f5bcbc;
        font-size: 10px;
        background-color: #3e0014;
        opacity: 1;
        border-top: 3px solid darkmagenta;
        visibility: hidden;
    }
    .photo img{
        width: 100%;
        height: 100%;
        border-radius: 3px;
    }
    .title{
        text-align: center;
        font-size: 26px;
        color: wheat;
        font-family: 'HelveticaNeue', 'helvetica neue', helvetica, arial, sans-serif;
    }
    .photo{
        width: 150px;
        height: 100px;
        background-color: #290202;
        border: 2px solid black;
        margin: 10px;
        display: inline-block;
        border-radius: 3px;
    }

    #wrapper{
        width: 80%;
        height: auto;
        border: 5px solid black;
        background-color: #0b2560;
        margin: auto;
        text-align: center;
    }
</style>
</body>
</html>