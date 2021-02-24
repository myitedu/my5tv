<?php
$target_dir = "photos/";
$target_file = $target_dir . basename($_FILES["your_photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (move_uploaded_file($_FILES["your_photo"]["tmp_name"], $target_file)) {
    echo "Your photo has been uploaded successfully";
}else{
    echo "Your photo is not bieno!";
}