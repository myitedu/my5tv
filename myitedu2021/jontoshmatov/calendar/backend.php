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
        $id = $event['id'];

        echo "<tr id='event_$id'>";
        echo "<td>$title</td><td>2021-05-12 12:00 PM</td>
        <td>1.00</td>
        <td class='table_img_icons'>
        <img data-id='$id' class='btn_edit' src='https://img.flaticon.com/icons/png/512/1159/1159633.png?size=1200x630f&pad=10,10,10,10&ext=png&bg=FFFFFFFF'>
        <img data-id='$id' class='btn_delete' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX9MPStXYs1LeHwyMHoiWkIJ3FffpQqVtHjg&usqp=CAU'>
        </td>";
        echo "</tr>";


        }
        echo "</table>";
    }

    public function fetchEvent()
    {
        $id = $this->parms['id'];
        $id = (int) $id;
        $sql = "SELECT * FROM events WHERE id = $id;";
        $event = $this->db->sql($sql);

        if (empty($event)){
            return null;
        }
        if (!empty($event[0]['event_date'])){
            $pattern = "#([0-9]{4}-[0-9]{2}-[0-9]{2})#";
            $result = preg_match($pattern, $event[0]['event_date'], $date);
            $event[0]['event_date'] = $date[0];
        }
        return json_encode($event[0]);
    }

    public function modifyEvent()
    {
        $id = $this->parms['id'];
        $id = (int) $id;
        $event_title = $this->parms['event_title'];
        $event_description = $this->parms['event_description'] ?? 'TBD';
        $event_title = addslashes($event_title);
        $event_description = addslashes($event_description);
        $event_date = $this->parms['event_date'];
        $event_time = $this->parms['event_time'];
        $event_duration = $this->parms['event_duration'] ?? 0;
        $sql = "UPDATE events SET 
        title = '$event_title',
        description = '$event_description',
        event_date = '$event_date',
        event_time = '$event_time',
        duration = $event_duration
        WHERE id = $id;";
        $this->db->sql($sql);
        return $sql;
    }

    public function deleteEvent()
    {
        $id = $this->parms['id'];
        $id = (int) $id;
        $sql = "DELETE FROM events WHERE id = $id";
        $this->db->sql($sql);
        return "deleted";
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
if ($backend->parms['action'] == 'modifyfetch') {
    print_r($backend->fetchEvent());
}
if ($backend->parms['action'] == 'modifyevent') {
    echo $backend->modifyEvent();
}
if ($backend->parms['action'] == 'delete') {
    echo $backend->deleteEvent();
}

