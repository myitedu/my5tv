<?php
function whoWon($board) {
    $os = [];
    $xs = [];
    for ($row=0; $row<count($board); $row++){
         $text = implode("", $board[$row]);
         echo $text."<br>";
         preg_match_all("#^[O]{3}$#", $text, $total);
         preg_match_all("#[X]{3}#", $text, $total2);
         $os[$row] = $total;
         $xs[$row] = $total2;
    }

    return [
        'O'=>$os[0][0][0],
        'X' => $xs[0][0][0]??0,
    ];

}


$result = whoWon([
    ["O", "O", "O"],
    ["X", "X", "O"],
    ["O", "X", "X"]
]);// ➞ "X"
echo "<pre>";
print_r($result);

$result = whoWon([
    ["O", "O", "X"],
    ["X", "O", "X"],
    ["O", "X", "O"]
]);// ➞ "O"
echo "<pre>";
//print_r($result);
$result = whoWon([
    ["O", "O", "X"],
    ["X", "X", "O"],
    ["O", "X", "O"]
]);// ➞ "Tie"
//echo "<pre>";
//print_r($result);