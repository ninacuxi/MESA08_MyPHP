<?php
    if (!isset($_REQUEST['account']))
        header("Location:nina19.php?error=2");

    $account = $_REQUEST['account'];
    echo $account;