<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <script src="/bootstrap/js/jquery-3.5.1.js"></script>
</head>
<body>

<?php
$rows = $_GET['rows'] ?? 5;
$cols = $_GET['cols'] ?? 5;
$color = $_GET['color'] ?? '#fff';

?>

<div class="container-fluid">

    <div id="myform">
        <h5>My Form</h5>
        <form>
            <table class="table table-bordered">
                <tr>
                    <td><label>Rows: </label></td>
                    <td><input value="<?php echo $rows; ?>" name="rows" min="0" max="100" type="number"></td>
                </tr>
                <tr>
                    <td><label>Cols</label></td>
                    <td><input name="cols" value="<?php echo $cols; ?>" min="0" max="100" type="number"></td>
                </tr>
                <tr>
                    <td><label>is Even</label></td>
                    <td>
                        <input type="checkbox" name="check_even_number" class="form-check-input">

                    </td>
                </tr>
                <tr>
                    <td><label>Color</label></td>
                    <td><input name="color" type="color" value="<?php echo $color;?>"></td>
                </tr>

                <tr>
                    <td colspan="2" class="last_td">
                        <button class="btn btn-success">GENERATE</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <hr>
    <div id="mytable">
        <table class="table table-bordered">
            <?php
            $number=0;
            for ($row = 0; $row < $rows; $row++) {

                echo "<tr>";
                    for($col=0; $col<$cols; $col++) {
                        $number++;
                        if ($number%2===0){
                            echo "<td style='background-color: $color'>$number</td>";
                        }else{
                            echo "<td>$number</td>";
                        }

                    }

                echo "</tr>";


            }
            ?>

        </table>
    </div>
</div>
<style>

    .even_number{
        background-color: red;
    }

    .last_td {
        text-align: center !important;
    }

    #myform input {
        width: 250px;
    }

    #myform table td:last-child {
        text-align: left;
    }

    #myform table td:first-child {
        text-align: right;
    }

    #myform table {
        width: 400px;
        margin: auto;
    }

    #myform {
        width: 100%;
        height:  auto;
        border-top: 5px solid rosybrown;
        border-bottom: 5px solid rosybrown;
        background-color: #ddd2d2;
        text-align: center;
    }

    #mytable {
        width: 100%;
        height: auto;
        border-top: 5px solid rosybrown;
        border-bottom: 5px solid rosybrown;
        background-color: #ddd2d2;
    }

    body {
        background-color: #0c5460;
    }
</style>
</body>
</html>