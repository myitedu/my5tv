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

<?php
$month=$_GET['month']??date('m');
$year=$_GET['year']??date('Y');
$year = (int) $year;
$month = (int) $month;
if ($year<1900 || $year>2200){
    $year = date('Y');
}
if ($month<1 || $month>12){
    $month = date('m');
}
$today_date = date('d');
$last_day = date('t');
$month_name = date('F', strtotime("$month/$today_date/$year"));
$first_weekday_number = date('w', strtotime("$month/1/$year"));
?>
<div id="calendar">
    <table class="table table-bordered">
        <tr>
            <th colspan="7"><?php echo $month_name." ".$year;?> </th>
        </tr>
        <?php
        $rows = range(1, 6);
        $cols = range(0, 6);
        $counter = 0;
        $counter2 = 1;
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

                if ($counter>$first_weekday_number){
                    $counter2++;
                }
                if ($counter<$first_weekday_number || $counter2>$last_day){
                    echo "<td>&nbsp;</td >";
                }else{
                    echo "<td>$counter2</td >";
                }
                $counter++;

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