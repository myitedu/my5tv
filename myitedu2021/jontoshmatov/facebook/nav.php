<?php if (isset($_SESSION['user'])):?>
    <div class="user_avatar_div">
        <hr>
        <img class="user_avatar" src="<?php echo $_SESSION['user']['avatar']?>"><br>
        <?php echo $_SESSION['user']['name']?> (<?php echo $_SESSION['user']['id']?>)
        <hr>
    </div>
<?php endif;?>

<nav>
    <a href="index.php"> Home </a>  |
    <?php if (!isset($_SESSION['user'])):?>
    <a href="login.php"> Login </a>  |
    <?php endif;?>
    <a href="logout.php"> Logout </a>  |
</nav>
<hr>
<?php
require_once "database.php";
$obj = new \Database\database('myitedu');
$sql = "SELECT * FROM blogs order by id desc";
$blogs = $obj->sql($sql);
?>
<nav>
    <?php foreach ($blogs as $blog):?>
    <a href="index.php?post=<?php echo $blog['id']?>"><?php echo $blog['title']?></a>  |
    <?php endforeach;?>
</nav>
