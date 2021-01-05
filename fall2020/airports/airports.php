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
<?php include_once "backend.php"; ?>
<div class="container-fluid">
    <header><?php include_once "navbar.php"; ?></header>
    <div id="container">

        <div id="airports_title">
            The list of World Airports
        </div>

        <table class="table table-bordered table_airports">
            <tr>
                <th>ID</th>
                <th>CITY</th>
                <th>COUNTRY</th>
                <th>NAME</th>
            </tr>
            <?php
            foreach ($airports as $airport){
            ?>
            <tr>
                <td><?php echo $airport['id'];?></td>
                <td>
                    <a class="airports_atags" href="https://en.wikipedia.org/wiki/<?php echo $airport['city'];?>"><?php echo $airport['city'];?></a></td>
                <td><?php echo $airport['country'];?></td>
                <td class="airport_name_atags" data-bs-toggle="modal" data-bs-target="#exampleModal"><?php echo $airport['name'];?>
                    <?php include_once "modal.php"; ?>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>

    </div>
    <footer><?php include_once "footer.php"; ?></footer>
</div>

</body>
</html>