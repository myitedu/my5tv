<?php
$target_file = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
?>
<img class="uploaded_image" src="<?php echo $target_file?>">

<style>
    .uploaded_image{
        width: 400px;
    }
</style>

