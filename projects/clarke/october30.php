<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>

<?php
$video_id = $_GET['video_id']??0;
$video_id = (int) $video_id;
if ($video_id>5){
    $video_id = 0;
}
$videos = [
    'https://www.youtube.com/embed/7qVhYFCPM8Q?autoplay=1',
    'https://www.youtube.com/embed/OA6exaDatPA?autoplay=1',
    'https://www.youtube.com/embed/a4hC3qGtTJE?autoplay=1',
    'https://www.youtube.com/embed/o70MzTHHNbI?autoplay=1',
    'https://www.youtube.com/embed/wnznPclsZxc?autoplay=1',
    'https://www.youtube.com/embed/gYO1uk7vIcc?autoplay=1',
];
$icons = [
    'https://www.mywanderlust.pl/wp-content/uploads/2018/08/visit-kiev-ukraine-142.jpg',
    'https://www.advertisingweek360.com/wp-content/uploads/2019/05/169istanbul-1170x600.jpg',
    'https://1.bp.blogspot.com/-MesgjniCuvY/VrDm8APVYKI/AAAAAAAE8NQ/mPWXx7B5W28/s1600/Kazakhstan%2B50%2B23%2BAstana.jpg',
    'https://i.ytimg.com/vi/ZVcJVmyjhyw/maxresdefault.jpg',
    'https://cdn.budgetyourtrip.com/images/photos/headerphotos/russia_moscow.jpg',
    'https://globalizationpedia.com/wp-content/uploads/2019/10/peo-hong-kong.jpg'


];
?>

<div id="living_room">
    <iframe id="mytv" src="<?=$videos[$video_id];?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
    <img id="remote_control" src="https://lh3.googleusercontent.com/proxy/IBf1HKMrq1Wv8-jXCHSldMD07_c1O_eactV-TpQ2CO0U8BtXNMULcHCX31235VgteNfj_tmaBA6qmsfVCU5kE2TRDLsySmot">
    <div id="menu">
        <table class="table table-bordered video_table">
            <?php foreach ($videos as $id=>$video){?>
                <tr>
                    <td><a href="october30.php?video_id=<?php echo $id;?>"><img src="<?php echo $icons[$id];?>"></a></td>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>
</div>


<style>
    .video_table td:first-child{
        text-align: center;
    }
    .video_table img{
        width: 150px;
    }
    #remote_control{
        height: 200px;
        position: absolute;
        left: 1504px;
        top: 500px;
        z-index: 10;
        cursor: pointer;
    }
    #menu{
        width: 0px;
        height: 292px;
        background-color: #4e5455a8;
        float: right;
        position: relative;
        top: 310px;
        border: 1px solid black;
        overflow: auto;

    }
    #mytv{
        position: relative;
        left: 453px;
        top: 105px;
        width: 284px;
        height: 150px;
    }
    #living_room{
        width: 1200px;
        height: 610px;
        margin: 100px auto;
        border: 4px solid black;
        background-color: black;
        background-image: url("https://st.hzcdn.com/simgs/pictures/home-theaters/media-room-with-upholstered-acoustic-walls-large-screen-tv-michelle-s-interiors-img~8f41f0e60c780fcd_4-5848-1-e724591.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }

    body{
        background-color: #011013;
    }
</style>
<script>
    $(function (){

        $("#mytv").trigger('play');


        var boxWidth = $("#menu").width();
        var is_open = false;
        $("#remote_control").click(function(){
            if (!is_open) {
                $("#menu").animate({
                    width: 388
                });
                is_open = true;
                return false;
            }
            if (is_open){
                $("#menu").animate({
                    width: 0
                });
                is_open = false;
                return false;
            }
        });
    });
</script>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> cf10fec5ddfc2e8a4cf3d4a8a98bc3158ef08286
