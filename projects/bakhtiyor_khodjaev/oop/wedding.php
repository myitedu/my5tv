<?php
namespace Toshmatovs;
class wedding
{

    public function __destruct(){
        //qul yuvasiz
        //give gifts
        //hayrlshuv
        echo "<hr>Destructni chaqir<hr>";
    }

    //Tuyga kirish methodi
    public function __construct(){
        //salomlashish
        //qul yuvdirish
        //podarkalar qabul qilish
        echo "<hr>Constructni chaqir<hr>";
    }

    public function dasturhonga_utkazish(){
        echo "Qani qani, turiga otinglar..";
    }

    public function play_dance_sing(){
        echo "Artistlar oyn kalgi bazim";
    }

    public function duolar(){
        echo "reading namaz";
    }

}

$wedding = new wedding();

