<?php
$keyword = $_POST['keyword']??null;

require_once "database.php";
$db = new \Database\database("myitedu");

$sql = "SELECT id,city,country FROM airports WHERE city like '%$keyword%' or country like '%$keyword%' group by city, country";
$results = $db->sql($sql);
foreach ($results as $result) {
    $img_url = "https://lh3.googleusercontent.com/proxy/C9SUzWJowr1v-DMLyl8Pvvtz7-Ll9dmN4M8OvFLIRhcO7XSxYICA7tOb2NuBEZIHdzG6BoKpW7-ClMATx42sTD1bKveOU4fZVOhVz6vFxEkiPQ";
    echo "<p class='suggestion_result_p'><img class='suggestion_result_icon' src='$img_url'> {$result['city']},{$result['country']} </p>";
}