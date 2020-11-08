<?php
$first_name = strip_tags($_POST['first_name']);
$last_name = strip_tags($_POST['last_name']);
$email = $_POST['email'];
$is_email_valid = filter_var($email, FILTER_VALIDATE_EMAIL); // it returns false if email is in a wrong format.
if (strlen($first_name)<3){
    header("Location: index.php?input=first_name&msg=Your First Name must be 3 chars long");
    exit;
}
if($is_email_valid===false){
    header("Location: index.php?input=email&msg=Your email is wrong");
    exit;
}

echo $first_name;
echo "<hr>";
echo "WOHOOO, Your email is correct!";