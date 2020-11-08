<?php

$letters = range('A','Z');

while ($letter = current($letters)) {
    if ($letter == 'Z') {
        $c = key($letters);
        echo $c.' = ';
        echo $letters[$c];
    }


    next($letters);
}

exit;
?>

<div class="left_col">
    <h5>Original</h5>
    <pre>
    <?php
    print_r($letters);
    ?>
    </pre>
</div>
<div class="right_col">
    <h5>Modified</h5>
    <pre>
    <?php
        print_r($numbers);
    ?>
 </pre>
</div>
<hr>
<div class="left_col">
 left bottom
</div>
<div class="right_col">
right bottom
</div>

<style>
    .prev{
        background-color: yellow;
        color: red;
    }
    .left_col{
        width: 50%;
        height: 400px;
        overflow: auto;
        float: left;
        display: inline-block;
        background-color: #eee5e5;
    }
    .right_col{
        width: 50%;
        height: 400px;
        overflow: auto;
        float: right;
        display: inline-block;
        background-color: #c4efa4;
    }
</style>
