<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
<?php
require_once "../database.php";
$db = new \Database\database("myitedu");
$sql = "SELECT id, full_name, subject, description FROM blogs order by id desc limit 10";
$messages = $db->sql($sql);
?>
<div class="container-fluid">

    <h3>Your Guests Message</h3>



    <div id="post_form">

        <?php
        if (isset($_GET['error']) && $_GET['error']==1){
            ?>
        <div class="alert alert-danger">
            <?=$_GET['msg']??null?>
        </div>
        <?php
            }
        ?>

        <?php
        if (isset($_GET['error']) && $_GET['error']==0){
            ?>
            <div class="alert alert-success">
                <?=$_GET['msg']??null?>
            </div>
            <?php
        }
        ?>


        <form action="post_form.php" method="post">
            <p>
                Your Name: <br><input name="full_name" type="text" placeholder="Your Full Name">
            </p>
            <p>
                Subject: <br><input name="subject" type="text" placeholder="Your Subject name">
            </p>
            <p>
                Your Message <br>
                <textarea name="your_message" placeholder="Your Message"></textarea>
            </p>
            <p>
                <button class="btn btn-dark" type="reset">Start Over</button>
                <button class="btn btn-info" type="submit">Post</button>
            </p>
        </form>

    </div>

    <div class="messages">
        <table class="table table-bordered">

            <?php
            foreach ($messages as $message){
                ?>
                <tr>
                    <td><?php echo $message['full_name']??"Admin"?></td>
                    <td><?php echo $message['subject']??"Hello"?></td>
                    <td><?php echo $message['description']??"How are you?"?></td>
                </tr>
                <?php
            }
            ?>


        </table>
    </div>

</div>

<style>
    tr:nth-child(odd){
        background-color: lightgrey;
    }
</style>
</body>
</html>