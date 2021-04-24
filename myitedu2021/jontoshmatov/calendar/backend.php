<?php
namespace Calendar;
use Database\database;

require_once 'database.php';
class Backend{
    private $db;
    public $parms;
    public function __construct()
    {
        $this->db = new database("myitedu");
        $this->parms = $_POST;
    }

    public function createEvent(){
        $event_title = $this->parms['event_title'];
        $event_description = $this->parms['event_description']??'TBD';
        $event_title = addslashes($event_title);
        $event_description = addslashes($event_description);
        $event_day = $this->parms['event_day'];
        $event_time = $this->parms['event_time'];
        $event_duration = $this->parms['event_duration']??0;
        $sql = "INSERT INTO events (title, description, event_date, event_time, duration) VALUES('$event_title', '$event_description', '$event_day', '$event_time', $event_duration);";
        $this->db->sql($sql);
        return $sql;
    }

    public function modifyEvent(){
        return false;
    }
    public function deleteEvent(){
        return false;
    }
    public function shareEvent(){
        return false;
    }
    public function inviteEvent(){
        return false;
    }
}

$backend = new Backend();
echo $backend->createEvent();
