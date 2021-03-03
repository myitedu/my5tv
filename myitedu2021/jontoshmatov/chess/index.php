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
            $cell_class = null;
            $count = 0;
            $letters = range('A', 'H');
            ####################################################
            for ($row = 1; $row < 9; $row++) {
                $newnum = 9 - $row;
                echo "<tr>";
                echo "<td class='num_cell'>$newnum</td>";
                ####################################################
                for ($col = 1; $col < 9; $col++) {
                    $count++;
                    //Even row
                    if ($row % 2 == 0) {
                        if ($col % 2 == 0) {
                            $cell_class = "white_cell";
                        } else {
                            $cell_class = "black_cell";
                        }
                    } else {
                        //Odd Row
                        if ($col % 2 == 0) {
                            $cell_class = "black_cell";
                        } else {
                            $cell_class = "white_cell";
                        }
                    }
                    echo "<td class='$cell_class'>&nbsp;</td>";
                }
                ####################################################
                echo "</tr>";
            }
            echo "<tr>";
            ####################################################
            for ($let_cell = 0; $let_cell < 8; $let_cell++) {
                echo "<td class='let_cell'>$letters[$let_cell]</td>";
            }
            ####################################################
            echo "</tr>";
            ?>
        </table>
    </div>
</div>
</body>
</html>