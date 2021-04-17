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
$last_day = date('t', strtotime("$month/$today_date/$year"));
$month_name = date('F', strtotime("$month/$today_date/$year"));
$first_weekday_number = date('w', strtotime("$month/1/$year"));
$holidays = ['USA','Uzbekistan','Russia'];
$holidays['Uzbekistan'] = [
    1=>[
        1=>['Holiday 1','Holiday 2'],
        28=>['Qurolli Kuchlar Kuni'],
    ],
    2=>[
        14=>['Anaqalar bayrami'],
        28=>['Qurolli Kuchlar Kuni'],
    ],
    8=>[
        26=>['Awesome day','Birthday']
    ]
];
?>
<div id="calendar">

    <div id="calendar_header">
        <form>
            <p>Select:
                <select name="month">
                <?php for ($m=1; $m<=12; $m++) {
                    if ($m==$month){
                        echo "<option selected value = \"$m\">".date('F', strtotime("$m/1/$year"))."</option >";
                    }else{
                        echo "<option value = \"$m\">".date('F', strtotime("$m/1/$year"))."</option >";
                    }

                }
                ?>
                </select>
                <input name="year" type="number" placeholder="<?php echo date('Y');?>" value="<?php echo date('Y');?>">
                <button type="submit" class="btn btn-success">GO</button>
            </p>
        </form>
    </div>

    <table class="table table-bordered">
        <tr>
            <th colspan="7"><?php echo $month_name." ".$year;?> </th>
        </tr>
        <?php
        $rows = range(1, 6);
        $cols = range(0, 6);
        $counter = 0;
        $counter2 = 1;
        $today_class_name = null;
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
                if ($month == date('m') && $year == date('Y') && $counter2==date('d')){
                    $today_class_name = "class='today_class'";
                }else{
                    $today_class_name = null;
                }
                if ($counter<$first_weekday_number || $counter2>$last_day){
                    echo "<td>&nbsp;</td >";
                }else{
                    echo "<td $today_class_name>$counter2</td >";
                }
                $counter++;

            }
            echo "</tr >";
        }
        ?>
    </table>
</div>

<style>
    select{
        height: 44px !important;
        position: relative;
        top: 4px;

    }
    .today_class{
        background-color: darkgreen !important;
        color: pink;
    }
    #calendar_header input, select{
        background-color: #f5eeca;
        height: 44px;
        border-radius: 7px;
        padding: 3px;
        color: #056706;
    }
    #calendar_header{
        text-align: center;
        font-size: 30px;
        font-weight: bolder;
        margin-top: 50px;
    }
    td:hover{
        background-color: #dce6e6;
        cursor: pointer;
        color: darkred;
    }
    td{
        text-align: center;
        font-size: 30px;
        font-weight: bolder;
        background-color: #edf8f8;
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
#calendar{
    width: 70%;
    margin: auto;
}
body{
    color: #16b716;
    background-image: url("https://www.toptal.com/designers/subtlepatterns/patterns/5-dots.png");
}
</style>

</body>
</html>