<?php
$keyword = $_POST['keyword']??null;
if (empty($keyword)){
    exit("Your keyword is empty!");
}
require_once "database.php";
$db  = new \Database\database("cardealers");
$sql = "SELECT * FROM companies WHERE name like '%$keyword%' order by id desc";
$items = $db->sql($sql);
?>

<table class="table table-bordered cardealer">
    <?php
    foreach ($items as $item){
    ?>
    <tr>
        <td style="background-color: <?php echo $item['navbar'];?>"><?php echo $item['navbar'];?></td>
        <td><img class="item_logo" src="<?php echo $item['logo'];?>"> </td>
        <td><?php echo $item['id'];?></td>
        <td><?php echo $item['name'];?></td>
    </tr>
    <?php
    }
    ?>
</table>

