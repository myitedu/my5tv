<?php
function countAll($str) {
    //countAll("149990") ➞ array("LETTERS" => 0, "DIGITS" => 6)
    $letters_count = 0;
    $numbers_count = 0;

    for ($i=0; $i<strlen($str); $i++){
        if (gettype($str) == 'integer'){
            $numbers_count++;
        }else{
            for ($y=0; $y<strlen($str); $y++){
                $num = (int) $str[$y];
                if (!$num){
                    $numbers_count++;
                    break;
                }else{
                    $letters_count++;
                    break;
                }
            }
        }

    }

    return [
        'LETTERS' => $letters_count,
        'DIGITS' => $numbers_count
    ];


}

$jon = countAll('Jon5');
echo "<pre>";
print_r($jon);