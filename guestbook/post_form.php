<?php
$full_name = $_POST['full_name']??null;
$your_message = $_POST['your_message']??null;
$subject = $_POST['subject']??null;

if (empty($full_name)){
    header("Location: index.php?error=1&msg=Your Full Name is required");
    exit;
}

if (empty($your_message)){
    header("Location: index.php?error=1&msg=Your message is required");
    exit;
}

if (empty($subject)){
    header("Location: index.php?error=1&msg=Your subject is required");
    exit;
}

require_once "../database.php";
$db = new \Database\database("myitedu");
$sql = "INSERT INTO blogs (full_name, subject, description) VALUES ('$full_name','$subject', '$your_message');";
$post = $db->sql($sql);
header("Location: index.php?error=0&msg=Your message has been posted successfully");
exit;


