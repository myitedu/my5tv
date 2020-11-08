<?php
include_once "tarbiya.php";
class Construction implements Tarbiya {
    //Class Properties or Attributes
    //Class methods or functions
    //public, protected, private, final - Visibility Scope or Class scope
    public function IaMPublicFunction(){
        echo "IaMPublicFunction: This is a public function <hr>";
    }
    protected function IaMProtectedFunction(){
        echo "IaMProtectedFunction: This is a protected function <hr>";
    }
    private function IaMPrivateFunction(){
        echo "IaMPrivateFunction: This is a private function <hr>";
    }
    public function yaxshi_odam_bol()
    {
        // TODO: Implement yaxshi_odam_bol() method.
        return "Hudo hohlasa Ota Onamni yuzing yuriq qilib ularni duosini olaman";
    }

    public function oqishga_kir()
    {
        // TODO: Implement oqishga_kir() method.
        return "Inshalloh, men ham IT sohasida zor mutahassis bolib etishaman!!!";
    }
}

$construction = new Construction('Zarina');
$construction->IaMPublicFunction();
echo $construction->oqishga_kir();
echo "<hr>";
echo  $construction->yaxshi_odam_bol();


