<?php
    $fp = fopen("./dir1/file2",'a+');

    fwrite($fp,"Hello,Word\nOK123");

    fclose($fp);