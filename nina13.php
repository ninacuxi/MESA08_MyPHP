<?php
    function pbrad(){
        echo 'Hello!<br>Nina<br>';
    }
    function pline(){
        echo'<hr>';
    }

    $i = 0;
    for(pbrad();$i<10;pline()){
       echo"{$i}<br>";
       $i++;
    }