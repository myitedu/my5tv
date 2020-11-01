<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagram API</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<?php
require_once "api.php";
?>
<div class="container-fluid">
    <h2>Welcome to Instagram API!</h2>
    <div id="instagram_post_likes">
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Photo</th>
            </tr>

            <?php
            foreach ($likes as $like){
            ?>

            <tr>
                <td><?php echo $like['id']?></td>
                <td><?php echo $like['username']?></td>
                <td><?php echo $like['full_name']?></td>
                <td class="profile_photo" ><img src="<?php echo $like['profile_pic_url']?>"> </td>
            </tr>

            <?php
            }
            ?>

        </table>
    </div>
</div>

<style>

    h2{
        text-align: center;
        color: yellow;
    }

    .profile_photo{
        text-align: center;
    }

    .profile_photo img{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border:1px solid black;
        padding: 3px;
        box-shadow: 2px 2px 2px 2px #474343;
    }

    table{
        background-color: #e7e7e7;
    }

    .container-fluid{
        background-color: #0c5460;
    }

    body{
        background-color: #0c5460;
    }

    td,th{
        border: 1px solid #000000 !important;
    }

    tr:nth-child(odd){
        background-color: #ffffff;
    }

    tr:hover{
        cursor: pointer;
        background-color: #f5b005;
    }

    th{
        background-color: #0e7138;
        color: wheat;
    }

</style>

</body>
</html>