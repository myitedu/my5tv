<?php
$emails = file_get_contents("emails.txt");
$emails = explode(",",$emails);
echo "<pre>";
foreach ($emails as $email){
    $email = explode("@",$email);
    echo "<span>$email[0]</span>@$email[1]<hr>";
}
?>

<style>
    span{
        background-color: red;
    }
</style>
