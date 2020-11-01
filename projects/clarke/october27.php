<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$name = 'Jon Toshmatov';
$location = 'New York';
$languages = ['PHP','CSS','Java','SQL','API','HTML','Python'];
define("COUNTRY", 'USA');
$nalog = 12.8;


$profession = [
        'name' => 'VP of Technology',
        'salary' => 250000, //integer
        'company' => [
                'name' => 'Google',
                'department' => 'IT'
        ]
];

$net_income = $profession['salary'] - ($profession['salary'] * $nalog / 100);

$bio = "My name is 
<span class='name'>$name</span> and I live in <span class='location'>$location</span>. 
I work for a large IT company as a {$profession['name']} . My salary is $".$profession['salary']." and my company is IBM at Marketing department. 
My total earnings after tax \$$net_income
I love programming in $languages[5],$languages[1] and $languages[0]. I live in " . COUNTRY;


echo $bio;

?>


<style>
    .location{
        color: blue;
    }
    .name{
        color: red;
    }
</style>


</body>
</html>