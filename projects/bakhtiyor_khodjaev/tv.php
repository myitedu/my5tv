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
$menu = $_GET['menu']??'open';
$vide_id = $_GET['video_id']??'3ma3yXXc3V8';

if ($menu=='open'){
    $menu = 'close';
}else{
    $menu = 'open';
}
?>
<div id="movie_theatre">
    <iframe id="myscreen" src="https://www.youtube.com/embed/<?php echo $vide_id;?>?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
    <a href="tv.php?video_id=<?php echo $vide_id;?>&menu=<?php echo $menu;?>"><img id="remote_control" src="/img/remote_control.png"></a>
    <?php
    if ($menu=='open'){
        ?>
    <div id="menu">
       <table class="table">
           <tr>
               <td>
                   <img class="menu_imgs" src="https://media.lasvegasmagazine.com/media/img/photos/2020/03/24/The_Strip_LD_t1024.jpg?b3f067808e872500b33dd7ef4ee517933144b05a">
               </td>
               <td>
                   <a class="btn btn-success" href="tv.php?video_id=uG1qZlEtorM">Las Vegas</a>
               </td>
           </tr>
           <tr>
               <td>
                   <img class="menu_imgs" src="https://media.timeout.com/images/105671906/630/472/image.jpg">
               </td>
               <td>
                   <a class="btn btn-success" href="tv.php?video_id=3ma3yXXc3V8">Chicago</a>
               </td>
           </tr>
       </table>
    </div>
        <?php
    }
    ?>
</div>

<style>
    #menu td:first-child{
        width: 200px;
        text-align: center;
    }
    .menu_imgs{
        width: 100%;
        border-radius: 20px;
        border: 2px solid darkred;
    }
    #menu{
        position: absolute;
        width: 400px;
        height: 250px;
        right: 196px;
        bottom: 0px;
        background-color: #271f5f75;
        z-index: 30;
        border: 5px solid #2d314a52;
        overflow: auto;
    }
    #remote_control{
        position: relative;
        width: 50px;
        left: 510px;
        top: 360px;
        z-index: 20;
    }

    #myscreen{
        position: relative;
        left: 292px;
        top: 136px;
        width: 491px;
        height: 170px;
        z-index: 10;
    }

    #movie_theatre{
        width: 1000px;
        height: 575px;
        background-color: #0c5460;
        margin: auto;
        background-image: url("/img/movie_theatre_screen.png");
        background-size: 100% 100%
    }

    body{
        background-color: black;
    }
</style>
</body>
</html>