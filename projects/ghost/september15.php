<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
<div class="container-fluid">
    <div id="mychess_board">
        <table class="table mychess">
            <?php
            $total = 0;
            $rows = 0;
            for ($row=0;$row<8; $row++){
                $rows++;
                echo "<tr>";
                echo "<td class='num_cell'>$rows</td>";


                for ($col=0;$col<8; $col++){
                    if ($row%2===0) {
                        if ($col%2!=0) {
                            echo "<td class='even_cell'><img class='chess_figures' src='https://lh3.googleusercontent.com/proxy/YtK6q9r0UU3CInGLMUgqD-qVsaAZ3_cRU7eFa91UnRHzD4wHrDGSln0zIGEu5zc-_CJCsnMzZuE3ZuTh4oFohhGdgnQeGRZTgcM3PISXeh4L'> </td>";
                        }else{
                            echo "<td class='odd_cell'>&nbsp;</td>";
                        }
                    }else{
                        if ($col%2==0) {
                            echo "<td class='even_cell'>&nbsp;</td>";
                        }else{
                            echo "<td class='odd_cell'>&nbsp;</td>";
                        }
                    }
                }
                echo "</tr>";
            }
            $letters = range('A', 'H');
            echo "<td>&nbsp;</td>";
            foreach ($letters as $letter) {
                echo "<td class='letter_cell'>$letter</td>";
            }
            ?>
        </table>
    </div>

</div>

    <script>
    $( function() {
        $( ".chess_figures" ).draggable();
        $( ".even_cell" ).droppable({
            drop: function( event, ui ) {
                $( this )
                    .addClass( "ui-state-highlight" )
                    .find( "p" )
                    .html( "Dropped!" );
            }
        });


        function jon(){
            alert("Jon");
        }


    } );
    </script>


<style>
    .chess_figures{
        width: 100%;
    }
    .letter_cell{
        width: 5px;
        font-size: 10px;
    }
.num_cell{
    width: 5px;
    font-size: 10px;
}
    td{
        border: 1px solid darkgray;
        width: 80px;
    }
    td:hover{
        background-color: #989808;
        cursor: pointer;
    }
    table{
        margin-bottom:0px !important;
    }

    #mychess_board{
        border: 1px solid black;
        width: 400px;
        margin: 100px auto;

    }

    .even_cell{
        background-color: #000000;
    }
    .odd_cell{
        background-color: #ffffff;
    }

    .mychess{
        width: 100%;

    }

    .container-fluid{
        text-align: center;
    }
</style>
</body>
</html>