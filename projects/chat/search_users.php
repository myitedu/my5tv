<?php
include_once "connectdb.php";
$keyword = $_POST['keyword'] ?? null;
if (empty($keyword)) {
    exit(0);
}
$sql = "SELECT * FROM users WHERE name like '%$keyword%';";
$users = $db->sql($sql);


foreach ($users as $user) {
    $active_class = null;


    ?>
    <li class="user_list" data-user_id="<?php echo $user['id']; ?>">
        <div class="d-flex bd-highlight">
            <div class="img_cont">
                <img src="<?php echo $user['avatar']; ?>"
                     class="rounded-circle user_img">
                <span class="online_icon"></span>
            </div>
            <div class="user_info">
                <?php
                echo "<span>{$user['name']}</span>";
                echo "<span></span>";
                echo "<p>{$user['name']} is online</p>";
                ?>

            </div>
        </div>
    </li>
    <?php
}
?>