<?php
$target_file = "uploads/".basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
echo "it is done!";