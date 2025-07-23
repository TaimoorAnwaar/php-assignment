<?php

interface payment{

    public function pay();
    public function refund();

}

class Jazzcash implements payment{

public function pay(){

    echo "transaction done from jazzcash";

}
public function refund(){

    echo "refund via jazzcash";
}

}

class easypaisa implements payment{

    public function pay(){

        echo "transaction done from easypaisa";
    }
    public function refund(){

    echo "refund via easypaisa";
}
}

$pay= new Jazzcash();
$pay->pay();

echo "<br>";

$pay= new easypaisa();
$pay->refund();


?>