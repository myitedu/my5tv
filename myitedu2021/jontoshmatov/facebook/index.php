<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Facebook!</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/facebook.css">
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="js/facebook.js"></script>
</head>
<body>
<?php
require_once "database.php";
$obj = new \Database\database('myitedu');
$comments = $obj->sql("SELECT * FROM comments order by id desc;");
?>
<div class="container-fluid">
    <div id="comments">
        <div class="post">
            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="post_url">
            <span>ny.gov</span><br>
            <span>NY State Website</span>
        </div>
        <div class="display_likes">
            <div class="display_likes_left">
                <img src="https://miro.medium.com/max/628/1*Jwrg6CEYram9n9kNIvqqNg.jpeg">
            </div>
            <div class="display_likes_right">2 Comments  20 Shares</div>
            <div class="clearfix"></div>
        </div>
        <div class="user_action">
        <table class="table mytable">
            <tr>
                <td> Like </td>
                <td> Comment </td>
                <td> Share </td>
                <td> Profile </td>
            </tr>
        </table>
        </div>
        <div class="filter">
            <select>
                <option value="created">Created Date</option>
                <option value="updated">Updated Date</option>
                <option value="author">Author</option>
                <option value="rating">Rating</option>
            </select>
        </div>
        <div class="myform">
            <div class="icon">
                <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png">
            </div>
            <div class="form_input">
                <form method="post" action="post_comment.php">
                    <input type="text" name="comment" placeholder="Write a comment...">
                </form>

            </div>
            <div class="clearfix"></div>
        </div>

        <?php foreach ($comments as $comment):?>
        <div class="mycomments">
            <div class="icon2">
                <img src="<?=$comment['icon'];?>">
            </div>
            <div class="form_input users_feedback">
                <?=$comment['comment'];?>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php endforeach;?>

    </div>
</div>
</body>
</html>