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
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
    <script src="js/scripts.js"></script>
</head>
<body>
<?php
$id = $_GET['img']??0;
$id = (int) $id;
$images = [
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT14YlKVkfgZ6BMpOlHIQXS-8AjyN_VDF-cgQ&usqp=CAU',
        'https://upload.wikimedia.org/wikipedia/commons/d/d1/Roma06%28js%29.jpg',
        'https://wonderfulengineering.com/wp-content/uploads/2017/03/Architecture-marvels-1.jpe',
        'https://i0.wp.com/www.hisour.com/wp-content/uploads/2019/09/Russian-Empire-Tourism.jpg?fit=960%2C640&ssl=1&resize=1280%2C720',
        'https://img.travelawaits.com/quill/b/e/4/5/8/c/be458c5131d10ca8e085ef83ba62a47b16c8a86e.jpg',
        'https://i.pinimg.com/originals/86/cd/fc/86cdfc4f1bd9d8d5ee12352f375b639f.jpg',
];
?>
<div class="container-fluid">
    <div class="title">Welcome Beck's Virtual Museum!</div>
    <div id="photo_frame">
        <img class="main_photo" src="<?php echo $images[$id];?>">
        <img class="bottom_frame" src="img/photo_frame.png">
    </div>
    <div id="small_photo_frames">
        <?php
        foreach ($images as $id=>$image){
            $style = "style=\"background-image: url($image)\"";
        ?>
            <a href="index.php?img=<?php echo $id;?>"><div class="photo" <?php echo $style; ?>> </div></a>
        <?php
        }
        ?>
    </div>
</div>
</body>
</html>