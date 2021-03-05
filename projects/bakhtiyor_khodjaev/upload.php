<?php
$conn = new mysqli("127.0.0.1","root","","myitedu");

$db = $conn->query("SELECT * FROM companies;");

while($row = $db->fetch_assoc()) {


}

$db->free_result();
$conn->close();

var_dump($db);