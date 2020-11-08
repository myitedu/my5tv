<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<div id="ches_board">
    <?php

    $row = 8;
    $col = 8;
    $count = 0;
    $class_name = 'odd_number';
    echo "<table class='table table-bordered'>";
    for ($rows=1; $rows<=$row; $rows++){
        echo "<tr>";
        for ($cols=1; $cols<=$col; $cols++){
            $count++;

            if ($rows%2!==0){
                if ($cols%2===0) {
                    $class_name = "even_cell";
                }else{
                    $class_name = "odd_cell";
                }
            }else{
                if ($cols%2!==0) {
                    $class_name = "even_cell";
                }else{
                    $class_name = "odd_cell";
                }
            }


            echo "<td class='$class_name'>&nbsp;</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</div>


<style>
    #ches_board{
        width: 700px;
        margin: 100px auto;
        border: 1px solid black;
    }
    td:hover{
        background-color: #dd9200;
        cursor: pointer;
    }
    .figures{
        width: 65%;
    }
    .even_cell{
        background-color: black;
        color: white;
        text-align: center;
    }
    .odd_cell{
        background-color: #ffffff;
        color: black;
        text-align: center;
    }
</style>
</body>
</html>