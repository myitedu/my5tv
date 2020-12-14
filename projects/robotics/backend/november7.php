<?php
include_once "database.php";
$db = new \Database\database("uzdirectory");
$sql = "SELECT * FROM sites WHERE active = 1";
$sites = $db->sql($sql);
?>

<table class="table table-bordered">

    <tr>
        <td>Thumbnail</td>
        <td>ID</td>
        <td>Name</td>
    </tr>

    <?php
    foreach ($sites as $site) {
        ?>
        <tr>
            <td><img class="thumb" src="<?php echo $site['thumbnail']; ?>"></td>
            <td><?php echo $site['id']; ?></td>
            <td><?php echo $site['name']; ?></td>
        </tr>

        <?php
    }
    ?>

</table>

<style>
    .thumb{
        width: 100px;
    }
</style>