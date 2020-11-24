<?php
$country = "Uzbekistan";
$name = "Bakhtiyor";
$study = "MYITEDU";
$kids = 6;
$bio = "hello my name is $name.";
$bio .= " I have $kids kids. I work at uber and free time I study IT at $study. I from $country";
$bio = str_replace("uber","microsoft",$bio);
$bio = explode(' ', $bio);
echo "<pre>";
foreach ($bio as $item){
    $item = str_replace("a","<span>a</span>",$item);
    echo $item."<hr>";
}
?>

<style>
    span{
        background-color: #1a4f07;
        color: #7abaff;
    }
</style>
