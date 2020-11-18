<?php
//In this tutorial we will be talking about nothing but arrays.
//What are arrays? how do you declare the arrays and array functions.
/*
$student_name = 'Jon Toshmatov';
$student_school = "Harvard University";
$student_year = 'senior';
$student_major = "Computer Science";
$student_degree = "Master's Degree";

$student = [
    'name' => "Jon Toshmatov",
    'school' => "Harvard University",
    'year' => "senior",
    'major' => "Computer Science",
    'degree' => "Master's Degree"
];
echo $student['name'] ."<br>";
echo $student['school'] ."<br>";
echo $student['year'] ."<br>";
echo $student['major'] ."<br>";
echo $student['degree'] ."<br>";
*/
$cars = ["Chevrolet Cobalt", "Daewoo Gentra", "Nexia 3 Ravon", "Chevy Captiva", "Chevrolet Trailblazer" ];
/*
echo $cars[0]."<br>";
echo $cars[1]."<br>";
echo $cars[2]."<br>";
echo $cars[3]."<br>";
echo $cars[4]."<br>";
*/

foreach ($cars as $number=>$car){
    $number++;
    echo "$number) $car <hr>";
}