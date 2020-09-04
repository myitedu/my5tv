<?php
echo "<pre>";
function makeBox($n) {
for($i=0; $i<$n; $i++){
    $hashtag = "#";
    $max = $n-1;
    if ($i==0){
        echo str_pad($hashtag,$n,"#")."<br>";
    }
    if ($i>0 && $i<$max){
        echo str_pad($hashtag,$n,' ');
        echo "#<br>";
    }

    if ($i==$max){
        echo str_pad($hashtag,$n,"#")."<br>";
    }
}
}

$result = makeBox(10) ;
print_r($result);

/*
 * makeBox(5) ➞ [
  "#####",
  "#   #",
  "#   #",
  "#   #",
  "#####"
]

makeBox(3) ➞ [
  "###",
  "# #",
  "###"
]

makeBox(2) ➞ [
  "##",
  "##"
]

makeBox(1) ➞ [
  "#"
]
 */