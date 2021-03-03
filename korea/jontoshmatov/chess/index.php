<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/chess.css">
</head>
<body>

<div class="container-fluid">
    <div id="chess">
        <table class="table">
            <?php
            $letters = range('a','h');
            $cell_num = 0;
            $td_cell = null;
            ######################################
            for ($row = 1; $row < 9; $row++) {
                $chess_num = 9 - $row;
                //Rows
                echo "<tr>";
                    ######################################

                    echo "<td class='chess_num'>$chess_num</td>";

                    for ($col = 1; $col < 9; $col++) {
                        $cell_num++;
                        //Columns
                        if ($row%2===0){
                            if ($col%2==0) {
                                $td_cell = "white_cell";
                            }else{
                                $td_cell = "black_cell";
                            }
                        }else{
                            if ($col%2==0) {
                                $td_cell = "black_cell";
                            }else{
                                $td_cell = "white_cell";
                            }
                        }



                        echo "<td class='$td_cell'>&nbsp;</td>";
                    }
                    ######################################

                echo "</tr>";
            }
            ######################################
            //Row letters
            ######################################
            echo "<tr>";
            for($col_let=0; $col_let<8; $col_let++){
                echo "<td class='col_let'>$letters[$col_let]</td>";
            }
            echo "</tr>";
            ######################################
            ?>
        </table>
    </div>
</div>

</body>
</html>