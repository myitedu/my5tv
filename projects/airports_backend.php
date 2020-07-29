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
        $keyword = $this->parms['keyword']??'Uzbekistan';
        $selected_type = $this->parms['selected_type']??'country';
        $sql = "SELECT * FROM airports WHERE details not like '%No airport found%' and $selected_type like '%$keyword%' order by id desc;";
        return $this->db->sql($sql);
    }
}
$obj = new Airport();
$airports = $obj->fetchAirports();
$total = count($airports);
$keyword = $obj->parms['keyword']??'Uzbekistan';