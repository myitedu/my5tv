<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar - April - 2021</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"></script>
    <script src="/js/jquery-3.5.1.js"></script>
</head>
<?php
exit("Work in progress");
ini_set("display_errors", 0);
$body_bg = "/img/spring_bg2.jpeg";
$seasons = [
    'winter' => [1, 2, 12],
    'spring' => [3, 4, 5],
    'summer' => [6, 7, 8],
    'fall' => [9, 10, 11],
];
$month = $_GET['month'] ?? date('m');
$year = $_GET['year'] ?? date('Y');
$year = (int)$year;
$month = (int)$month;
if ($year < 1900 || $year > 2200) {
    $year = date('Y');
}
if ($month < 1 || $month > 12) {
    $month = date('m');
}
if (in_array($month, $seasons['winter'])) {
    $season_name = 'winter';
    $body_bg = "/img/winter_bg.jpeg";
}
if (in_array($month, $seasons['spring'])) {
    $season_name = 'spring';
    $body_bg = "/img/spring_bg.jpeg";
}
if (in_array($month, $seasons['summer'])) {
    $season_name = 'summer';
    $body_bg = "/img/summer_bg.jpeg";
}
if (in_array($month, $seasons['fall'])) {
    $season_name = 'fall';
    $body_bg = "/img/fall_bg.jpeg";
}
require_once 'database.php';
$conn = new \Database\database('myitedu');
if ($month < 10) {
    $mymonth = "0" . $month;
}
$sql = "SELECT * FROM events WHERE event_date LIKE '$year-$mymonth%';";
$events = $conn->sql($sql);
$today_date = date('d');
$last_day = date('t', strtotime("$month/$today_date/$year"));
$month_name = date('F', strtotime("$month/$today_date/$year"));
$first_weekday_number = date('w', strtotime("$month/1/$year"));
$holidays = ['USA', 'Uzbekistan', 'Russia'];
$holidays['Uzbekistan'] = [
    1 => [
        1 => ['New Year'],
    ],
    2 => [
        14 => ['Anaqalar bayrami'],
        28 => ['Qurolli Kuchlar Kuni'],
    ],
    3 => [
        8 => ['International Womens day'],
    ],
    5 => [
        9 => ['Remembrance Day', 'Victory Day'],
        12 => ['Eid al-Fitr']
    ],
    7 => [
        19 => ['Eid al-Adha']
    ],
    9 => [
        1 => ['Independence Day of Uzbekistan']
    ],
    10 => [
        1 => ['Teachers Day']
    ],
    12 => [
        8 => ['Constitution Day']
    ]
];
$holidays['USA'] = [
    1 => [
        1 => ['New Year'],
        18 => ['Martin Luther King Jr. Day']
    ],
    5 => [
        31 => ['Memorial Day']
    ],
    6 => [
        1 => ['Bollar kuni']
    ],
    7 => [
        4 => ['Independence Day']
    ],
    8 => [
        26 => ['Jon Toshmatov\'s Birthday', 'Global IT Conference', 'Earth Day']
    ],
    9 => [
        6 => ['Labor Day']
    ],
    11 => [
        11 => ['Veterans Day'],
        25 => ['Thanksgiving']
    ],
    12 => [
        25 => ['Christmas Day']
    ],
];
$holidays['Russia'] = [
    1 => [
        1 => ['New Year'],
        7 => ['Christmas', 'Eastern Orthodox Christmas'],
        8 => ['Old New Year']
    ],
    2 => [
        23 => ['Defender of the Fatherland Day'],
    ],
    3 => [
        8 => ['International Womens day'],
    ],
    5 => [
        3 => ['Labour Day'],
        10 => ['Victory Day']
    ],
    11 => [
        4 => ['Unity Day'],
    ],
];
$days = [];
$event_titles = [];
foreach ($events as $event) {
    $date = date('d', strtotime($event['event_date']));
    $date = (int)$date;
    $days[$date][] = $event;
    $event_titles[$date][] = $event['title'] ?? NULL;
}

?>
<body style="background-image: url('<?php echo $body_bg; ?>')">
<div id="calendar" data-month="<?php echo $month; ?>" data-year="<?php echo $year; ?>">
    <div id="calendar_header">
        <form>
            <p>Select:
                <select name="month">
                    <?php for ($m = 1; $m <= 12; $m++) {
                        if ($m == $month) {
                            echo "<option selected value = \"$m\">" . date('F', strtotime("$m/1/$year")) . "</option >";
                        } else {
                            echo "<option value = \"$m\">" . date('F', strtotime("$m/1/$year")) . "</option >";
                        }

                    }
                    ?>
                </select>
                <input name="year" type="number" placeholder="<?php echo date('Y'); ?>"
                       value="<?php echo date('Y'); ?>">
                <button type="submit" class="btn btn-success">GO</button>
            </p>
        </form>
    </div>
    <table class="table table-bordered">
        <tr>
            <th colspan="7"><?php echo $month_name . " " . $year; ?> </th>
        </tr>
        <?php
        $rows = range(1, 6);
        $cols = range(0, 6);
        $counter = 0;
        $counter2 = 1;
        $today_class_name = "class='active_days'";
        foreach ($rows as $row) {

            if ($row == 1) {
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
                if ($counter > $first_weekday_number) {
                    $counter2++;
                }
                if ($month == date('m') && $year == date('Y') && $counter2 == date('d')) {
                    $today_class_name = "class='active_days today_class'";
                } else {
                    $today_class_name = "class='active_days'";
                }
                if ($counter < $first_weekday_number || $counter2 > $last_day) {
                    echo "<td>&nbsp;</td >";
                } else {
                    $show_holiday = count($holidays['USA'][$month][$counter2]) + count($days[$counter2]);

                    if ($show_holiday) {
                        echo "<td $today_class_name><div data-clicked='no' data-month='$month' data-year='$year' data-date='$counter2' class='today_events'>$show_holiday</div>$counter2</td >";
                    } else {
                        echo "<td $today_class_name></div>$counter2</td >";
                    }

                }
                $counter++;

            }
            echo "</tr >";
        }
        ?>
    </table>
    <div class="calendar_footer">
        <ul>
            <?php
            $allevents = [];

            if ($holidays['USA'][$month]) {
                $allevents = array_merge($holidays['USA'][$month], $event_titles);
            } else {
                $allevents = $event_titles;
            }

            foreach ($allevents as $days) {
                foreach ($days as $day) {
                    echo "<li>$day</li>";
                }
            }

            ?>
        </ul>
    </div>
</div>
<link rel="stylesheet" href="css/calendar.css">
<?php
include_once "modal.php";
include_once "modal2.php";
?>

<script>
    $(function () {
        var clicked_today_event = false;
        $(document).on("click", ".active_days", function () {
            var day = $(this).text();
            var month = $("#calendar").data("month");
            var year = $("#calendar").data("year");
            var clicked = $(this).children('.today_events').data('clicked');
            $("#calendar_modal").modal("hide");


            if (typeof clicked == 'undefined' || clicked == 'no') {
                $("#calendar_modal").modal("show");
            }

            if (month < 9) {
                month = '0' + month;
            }
            if (day < 10) {
                day = '0' + day;
            }
            var display_date = year + '-' + month + '-' + day;
            $("#calendar_modal_day").val(display_date);
            // $(this).children('.today_events').data('clicked','no');
        });
        $(document).on("click", "#btn_save_events", function () {
            var calendar_modal_title = $("#calendar_modal_title").val();
            var calendar_modal_day = $("#calendar_modal_day").val();
            var calendar_modal_time = $("#calendar_modal_time").val();
            if (calendar_modal_title.length < 3) {
                alert("Your event title is too short");
                return false;
            }
            if (calendar_modal_day.length < 3) {
                alert("You must enter correct date");
                return false;
            }
            if (calendar_modal_time.length < 3) {
                alert("You must enter correct time");
                return false;
            }

            var parms = {
                'event_title': calendar_modal_title,
                'event_day': calendar_modal_day,
                'event_time': calendar_modal_time,
                'action': 'create'
            };
            var api = $.post('backend.php', parms, function (response) {
                document.location = '/myitedu2021/jontoshmatov/calendar';
            });

        });
        $(document).on("click", ".today_events", function () {
            clicked_today_event = true;

            var m = $(this).data('month');
            var d = $(this).data('date');
            var y = $(this).data('year');

            var clicked = $(this).data('clicked');
            var parms = {'m': m, 'd': d, 'y': y, 'action': 'fetch'};
            var api = $.post('backend.php', parms, function (response) {
                $(".modal-body2").html(response);
                $("#calendar_modal2").modal("show");
                $("#calendar_modal").modal("hide");
            });
            $(this).data('clicked', 'no');
            //$("#calendar_modal2").modal("show");
            return false;

        });
        //btn_delete
        $(document).on("click", ".btn_delete", function () {
            var id = $(this).data('id');
            var parms = {'id': id, 'action': 'delete'};
            var ask = confirm("Is it ok to delete this event?");
            if (!ask) {
                return false;
            }
            var api = $.post('backend.php', parms, function (response) {
                console.log(response);
                $("#event_" + id).remove();
            });
        });

        $(document).on("click", ".btn_edit", function () {
            var id = $(this).data('id');
            $(".calendar_modal2_form").show();
            $(".modal-body2").hide();
            var parms = {'id': id, 'action': 'modifyfetch'};
            var api = $.post('backend.php', parms, function (response) {
                let result = JSON.parse(response);
                $("#modify_event_id").val(result.id);
                $("#modify_event_title").val(result.title);
                $("#modify_event_description").val(result.description);
                $("#modify_event_date").val(result.event_date);
                $("#modify_event_time").val(result.event_time);
                $("#modify_event_duration").val(result.duration);
            });
        });

        $(document).on("click", "#modify_event_btn_submit", function () {
            var id = $("#modify_event_id").val();
            var event_title = $("#modify_event_title").val();
            var event_description = $("#modify_event_description").val();
            var event_date = $("#modify_event_date").val();
            var event_time = $("#modify_event_time").val();
            var event_duration = $("#modify_event_duration").val();
            var parms = {
                'action': 'modifyevent',
                'id': id,
                'event_title': event_title,
                'event_description': event_description,
                'event_date': event_date,
                'event_time': event_time,
                'event_duration': event_duration,

            };
            var api = $.post('backend.php', parms, function (response) {
                console.log(response);
            });
            return false;
        });

    });
</script>
</body>
</html>