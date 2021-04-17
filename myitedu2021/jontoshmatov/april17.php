<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar - April - 2021</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
<div id="calendar">
    <table class="table table-bordered">
        <tr>
            <th colspan="7">April 2021</th>
        </tr>
        <?php
        $rows = range(1, 6);
        $cols = range(1, 7);
        $counter = 0;
        foreach ($rows as $row) {

            if ($row==1){
                echo "<th>S</th>";
                echo "<th>M</th>";
                echo "<th>T</th>";
                echo "<th>W</th>";
                echo "<th>T</th>";
                echo "<th>F</th>";
                echo "<th>S</th>";
            }

            echo "<tr>";

            foreach ($cols as $col) {
                $counter++;



                if ($counter<4){
                    echo "<td>&nbsp;</td >";
                }else{
                    echo "<td>$counter</td >";
                }

            }
            echo "</tr >";
        }
        ?>
    </table>
</div>

<style>
    td{
        text-align: center;
    }

    tr:nth-child(2) th{
        text-align: center;
        font-size: 18px;
        background-color: #f3f0f0;
    }

tr:first-child th{
    text-align: center;
    background-color: darkgreen;
    color: yellow;
    font-size: 27px;
}
</style>

</body>
</html>