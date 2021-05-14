<?php
$user_answers = range('A','Y');
$correct_answers = ['B'];
$results = [];
foreach ($user_answers as $num=>$answer){

    if (in_array($answer, $correct_answers)){
        $results[$num] = $answer;
    }
}

echo "<pre>";
print_r($results);