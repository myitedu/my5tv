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
    $letters = range('a','h');
    ?>
    <tr>
        <?php foreach ($letters as $letter):?>
            <td class="top_letters"><?=$letter;?></td>
        <?php endforeach;?>
    </tr>

    <?php for($row=1; $row<9; $row++):?>
    <tr>
        <?php
        $row_down = 1;
        for($col=1; $col<9; $col++):
            $count++;
            $row_down = 9 - $row;
            if ($col===1){
                echo "<td class='row_num'>$row_down</td>";
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

            $data_row = $row_down;
            $data_letter = $letters[$col-1];

        ?>

        <td data-row="<?php echo $data_row;?>" data-letter="<?php echo $data_letter;?>"  class="chess_cell <?php echo $white_td;?> droppable" >&nbsp;</td>
        <?php endfor;?>

    </tr>
    <?php endfor;?>

    <tr>
        <?php foreach ($letters as $letter):?>
        <td class="bottom_letters"><?=$letter;?></td>
        <?php endforeach;?>
    </tr>
</table>
</div>
<div class="icon">
    <img src="https://iconarchive.com/download/i94452/blackvariant/button-ui-system-apps/Chess.ico">
</div>


<style>
    .top_letters{
        position: relative;
        left: 155px;
        top: 34px;
        color: #f1e966;
    }
    .bottom_letters{
        position: relative;
        left: 155px;
        top: -30px;
        color: #f1e966;
    }
    .row_num_right{
        color: #f1e966;
        text-align: right;
        padding: 2px;
        font-size: 20px !important;
        border: 1px solid #880069 !important;
        background: none !important;
        background-color: #880069 !important;
        position: relative;
        background-color: #0b7fa8;
        z-index: 1000;
        left: 1000px;
        top: 10px;
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
        text-align: center;
        color: white;
    }
    .white_td{
        background-color: #ffffff;
        text-align: center;
        color: black;
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