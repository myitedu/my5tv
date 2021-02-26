<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
        #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
        #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( ".icon" ).draggable();
            $( ".droppable" ).droppable({
                drop: function( event, ui ) {
                    $( this )
                        .addClass( "ui-state-highlight" );
                }
            });
        } );
    </script>
</head>
<body>

<div class="exercise">
<table class="table table-bordered">
    <?php
    $count= 0;
    $white_td = null;
    $black_td = null;
    $letters = range('A','H');
    for($row=1; $row<9; $row++){
    ?>
    <tr>
        <?php
        for($col=1; $col<9; $col++){
            $count++;

            if ($col===1){
                echo "<td class='row_num'>$row</td>";
            }
            if ($row%2==0){ //even numbers
                if ($count%2==0){ //even numbers
                    $white_td = "black_td";
                }else{
                    $white_td = "white_td";
                }
            }else{ //odd numbers
                if ($count%2 !==0){ //even numbers
                    $white_td = "black_td";
                }else{
                    $white_td = "white_td";
                }
            }
        ?>
        <td class="<?php echo $white_td;?> droppable" >
        </td>
        <?php
        }
        ?>

    </tr>
    <?php
    }
    ?>
    <tr>
        <td class="letters">A</td>
        <td class="letters">B</td>
        <td class="letters">C</td>
        <td class="letters">D</td>
        <td class="letters">E</td>
        <td class="letters">F</td>
        <td class="letters">G</td>
        <td class="letters">H</td>
    </tr>
</table>
</div>
<div class="icon">
    <img src="https://iconarchive.com/download/i94452/blackvariant/button-ui-system-apps/Chess.ico">
</div>


<style>
    .letters{
        position: relative;
        left: 155px;
        top: -30px;
        color: #f1e966;
    }
    .row_num{
        color: #f1e966;
        text-align: right;
        padding: 2px;
        font-size: 20px !important;
        border: 1px solid #880069 !important;
        background: none !important;
        background-color: #880069 !important;
    }
    .icon img{
        width: 90%;
    }
    .icon {
        width: 80px;
        text-align: center;
    }
    .jon{
        background-color: #0acf0d;
    }
    .black_td{
        background-color: #000000;
    }
    .white_td{
        background-color: #ffffff;
    }
    table{


    }
    td{
        width: 100px;
        height: 100px;
    }
    .exercise{
        width: 90%;
        margin: 100px auto;
        height: auto;
        padding: 5px;
    }
    body{
        background-color: #880069;
    }
</style>

</body>
</html>