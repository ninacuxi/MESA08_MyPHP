<?php
    include 'ninaapi.php';
    session_start();

    $cart = $_SESSION['cart'];

    $name = $cart->getMember()->getName();

    echo"Page2:{$name}<hr>";
    $list = $cart->getbuylist();
    foreach ($list as $k => $v){
        echo"{$k} : {$v}<br>";
    }


    //
    $cart->addItem('P042',72);
    $cart->addItem('P142',2);
    $cart->addItem('P049',7);
    $cart->rmItem('P003');
?>
<a href="nina43.php">Close</a>
