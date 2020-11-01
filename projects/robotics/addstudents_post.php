<?php

$mysql = mysqli_connect("localhost","root","","myitedu");
if (!$mysql && !isset($mysql->connect_error)){
    exit("There is a DB connection error: DB connection is not established");
}

if (!isset($_POST['full_name'])){
    echo "Message: The full_name field is empty";
    header("Location: addstudents.php");
    exit;
}

$full_name = $_POST['full_name']??'No Name';
$company_name = $_POST['company']??'No Company Name';

$sql = "SELECT full_name FROM students WHERE full_name='$full_name' and company='$company_name';";
$results = $mysql->query($sql);
if ($results->num_rows){
    echo "Message: This student already exists in the database";
    header("Location: addstudents.php");
    exit;
}

$sql2 = "INSERT INTO students (full_name, company) VALUES ('$full_name','$company_name')";

$results = $mysql->query($sql2);
$mysql->close();

echo "Message: Your new student has been entered successfully";

header("Location: addstudents.php");
exit;
