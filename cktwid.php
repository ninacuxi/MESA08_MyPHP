<?php

    if (isset($_GET['twid'])){
        $twid = $_GET['twid'];

        if(preg_match('/^[A-Z][12][0-9]{8}$/',$twid)){
           $c1 = $twid[0];
           $alpha = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
           $n12 = strops($alpha,$c1) + 10;
           $n1 = (int)($n12/10);
           $n2 = $n12 % 10;
           $n3 = $twid[1];
           $n4 = $twid[1];
           $n5 = $twid[1];


        }else{
            echo 'XX';
        }

    }

?>
<form>
    <input name="twid"/>
    <input type="submit" value="check"/>
</form>