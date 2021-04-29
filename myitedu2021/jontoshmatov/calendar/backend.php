<?php

namespace Calendar;

use Database\database;

require_once 'database.php';

class Backend
{
    private $db;
    public $parms;

    public function __construct()
    {
        $this->db = new database("myitedu");
        $this->parms = $_POST;
    }

    public function createEvent()
    {
        $event_title = $this->parms['event_title'];
        $event_description = $this->parms['event_description'] ?? 'TBD';
        $event_title = addslashes($event_title);
        $event_description = addslashes($event_description);
        $event_day = $this->parms['event_day'];
        $event_time = $this->parms['event_time'];
        $event_duration = $this->parms['event_duration'] ?? 0;
        $sql = "INSERT INTO events (title, description, event_date, event_time, duration) VALUES('$event_title', '$event_description', '$event_day', '$event_time', $event_duration);";
        $this->db->sql($sql);
        return $sql;
    }

    public function fetchEvents()
    {
        $m = $this->parms['m'] ?? NULL;
        $d = $this->parms['d'] ?? NULL;
        $y = $this->parms['y'] ?? NULL;
        if ($d < 10) {
            $d = '0' . $d;
        }
        if ($m < 10) {
            $m = '0' . $m;
        }
        if (!$m || !$d || !$y) {
            echo "No all required parms are passed";
            return FALSE;
        }

        $sql = "SELECT * FROM events WHERE event_date like '$y-$m-$d%';";
        $events = $this->db->sql($sql);
        echo "<table class='table table-bordered'>";
        foreach ($events as $event){
        $desc = substr($event['description'], 0, 20);
        $title = substr($event['title'], 0, 20);


        echo "<tr>";
        echo "<td>$title</td><td>2021-05-12 12:00 PM</td>
        <td>1.00</td>
        <td class='table_img_icons'>
        <img src='https://img.flaticon.com/icons/png/512/1159/1159633.png?size=1200x630f&pad=10,10,10,10&ext=png&bg=FFFFFFFF'>
        <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX9MPStXYs1LeHwyMHoiWkIJ3FffpQqVtHjg&usqp=CAU'>
        </td>";
        echo "</tr>";


        }
        echo "</table>";
    }

    public function modifyEvent()
    {
        return FALSE;
    }

    public function deleteEvent()
    {
        return FALSE;
    }

    public function shareEvent()
    {
        return FALSE;
    }

    public function inviteEvent()
    {
        return FALSE;
    }
}

$backend = new Backend();
if ($backend->parms['action'] == 'create') {
    echo $backend->createEvent();
}
if ($backend->parms['action'] == 'fetch') {
    echo $backend->fetchEvents();
}

