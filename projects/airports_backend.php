<?php
namespace Transportation;
use Database\database;
require_once "database.php";
class Airport{
    public $parms;
    private $db;
    public function __construct()
    {
        $this->parms = $_GET;
        $this->db = new database('myitedu');
    }

    public function fetchAirports(){
        $keyword = strip_tags($this->parms['keyword'])??'Uzbekistan';
        $selected_type = strip_tags($this->parms['selected_type'])??'country';

        $bad_sql = "WHERE user_id = 9999 or 1 = true; delete from users;";

        $sql = "SELECT * FROM airports WHERE details not like '%No airport found%' and $selected_type like '%$keyword%' order by id desc;";
        return $this->db->sql($sql);
    }
}
$obj = new Airport();
$airports = $obj->fetchAirports();
$total = count($airports);
$keyword = $obj->parms['keyword']??'Uzbekistan';