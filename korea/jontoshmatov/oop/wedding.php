<?php
ini_set("display_errors",1);
include_once "database.php";
class Wedding{

    private $conn;
    private $guests;

    public function __construct(){
        $this->conn = new \Database\database("myitedu");
        $this->greetGuests();
    }

    protected function greetGuests(){
        echo "<hr>Construct: Assalomyu Allaymum, hush kelibsiz <hr>";
        $mexmons = $this->conn->sql("SELECT * FROM users;");

        echo "Mexmonlar: ";
        foreach ($mexmons as $mexmon){
            echo $mexmon['first_name'].", ";
        }
        $this->washHands();
    }
    protected function washHands(){
        echo "<hr>Keling holajon yoki togajon, qullaringini yuvib olinglar<hr>";
        $this->party();
    }

    protected function party(){
        echo "<hr>Yeb-echar boshlandi<hr>";
    }

    protected function sayGoodBye(){
        echo "<hr>Destruct: Raxmat kelgnalaring uchun, salom ayting uydagilarga<hr>";
    }

    public function __destruct(){
        $this->sayGoodBye();
    }

}

$wedding = new Wedding();

