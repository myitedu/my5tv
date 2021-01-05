<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
    <script src="/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid">
    <header><?php include_once "navbar.php"; ?></header>
    <div id="container">

        <!--Carousel starts here-->
        <?php include_once "carousel.php"; ?>
        <!--Carousel ends here-->

        <!--Cards start here-->
        <?php include_once "cards.php"; ?>
        <!--Cards end here-->
    </div>
    <footer><?php include_once "footer.php"; ?></footer>
</div>

</body>
</html>