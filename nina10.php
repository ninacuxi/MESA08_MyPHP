<?php
    $a = 10; $b=8;
    switch ($a){
        case $b+2:
            echo 'A';
            break;
        case 10:
            echo 'B';
            break;
        case 88:
            echo 'C';
            break;
        default:
            echo'Default';
            break;
    }
    echo '<br>Finish';