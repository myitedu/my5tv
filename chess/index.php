<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
        #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
    </style>
    <link rel="stylesheet" href="css/chess.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/chess.js"></script>
</head>
<body>
<div class="exercise">
    <table class="table table-bordered">
        <?php
        $count= 0;
        $white_td = null;
        $black_td = null;
        $letters = range('a','i');
        ?>
        <tr>
            <?php foreach ($letters as $letter):?>
                <td class="top_letters"><?=$letter;?></td>
            <?php endforeach;?>
        </tr>

        <?php for($row=1; $row<10; $row++):?>
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
                    $player = null;

                    if ($row==2){
                        $player = "<img src='img/white_pawn.png'>";
                    }
                    if ($row==7){
                        $player = "<img src='img/black_pawn.png'>";
                    }

                    ?>

                    <td data-row="<?php echo $data_row;?>" data-letter="<?php echo $data_letter;?>"  class="chess_cell <?php echo $white_td;?> droppable" >
                        <?php echo $player;?>
                    </td>
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
</body>
</html>