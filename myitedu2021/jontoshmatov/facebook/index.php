<?php
session_start();
$_SESSION['user'] = [
        'id' => 1,
        'name' => 'Jon Toshmatov'
];
$user = $_SESSION['user'];
$user_id = $user['id'];
?>
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
$post_id = $_GET['post']??1;
$msg = $_GET['msg']??null;

    if (empty($post_id)){
        exit("The post id is missing");
    }
$post = $obj->sql("SELECT * FROM blogs WHERE id = $post_id;");
$comments = $obj->sql("SELECT * FROM comments WHERE blog_id = $post_id order by id desc;");
?>
<div class="container-fluid">
    <div id="comments">
        <div class="post">
            <?php echo $post[0]['content'];?>
        </div>
        <?php if (!empty($msg)):?>
        <div class="alert alert-danger"><?=$msg;?></div>
        <?php endif;?>
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
                <td> <a href="backend.php?post=<?=$post_id;?>"> Like </a></td>
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