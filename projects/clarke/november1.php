<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/november1.css">
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
</head>
<body>

<?php
$number = 0;
$maxrow = $_GET['row']??3;
$maxcol = $_GET['col']??3;
$even_color = $_GET['even_color']??'red';
$odd_color = $_GET['odd_color']??'blue';
?>

<div class="container-fluid">
    <form>
        <h3 class="mytitle">MY DYNAMIC TABLE</h3>
        <hr>

        <table class="table table-bordered myformtable" style="width: 550px; margin: auto">
            <tr>
                <td>Row</td>
                <td><input type="number" name="row" value="<?php echo $maxrow; ?>"></td>
            </tr>
            <tr>
                <td>Col</td>
                <td><input type="number" name="col" value="<?php echo $maxcol; ?>"></td>
            </tr>
            <tr>
                <td>Even Color</td>
                <td>
                    <input id="even_color_input" type="text" name="even_color" value="<?php echo $even_color; ?>">
                    <input id="even_color" type="color" value="<?php echo $even_color; ?>">
                </td>
            </tr>
            <tr>
                <td>Odd Color</td>
                <td>
                    <input id="odd_color_input" type="text" name="odd_color" value="<?php echo $odd_color; ?>">
                    <input id="odd_color" type="color" value="<?php echo $odd_color; ?>">
                </td>
            </tr>
        </table>
<hr>
            <button type="submit">Update</button>
        </p>
    </form>
    <div id="mytable">
        <table class="table table-bordered primary_table">
            <?php
            $class = null;
            for ($row = 0; $row < $maxrow; $row++) {
                echo "<tr>";
                for ($col = 0; $col < $maxcol; $col++) {
                    $number++;

                    if ($number%2===0){
                        $class = "style='background-color:$even_color'";
                    }else{
                        $class = "style='background-color:$odd_color'";
                    }


                    echo "<td $class >$number</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>
<script>


    $(function (){
        $("#even_color").change(function (){
           let color = $(this).val();
          $("#even_color_input").val(color);
        });

        $("#odd_color").change(function (){
            let color = $(this).val();
            $("#odd_color_input").val(color);
        });
    });

</script>


</body>
</html>