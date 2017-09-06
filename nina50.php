<?php
    session_start();
    $var1 = 12;
    $var2 = array(1,2,3);
    $var3 = false;


    $_SESSION['var1'] = $var1;  //12
    $_SESSION['var2'] = $var2;
    $_SESSION['var3'] = $var3;
?>
<a href="nina51.php">Nina51</a>
