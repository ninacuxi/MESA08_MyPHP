<?php
    $mysqli = new mysqli('localhost','root', 'root', 'iii');
    $account = $_GET['account'];
    $passwd = $_GET['passwd'];
    $realname = $_GET['realname'];
    $sql =
        "INSERT INTO member (account,passwd,realname) VALUES ('{$account}','{$passwd}','{$realname}')";
    $mysqli->query($sql);
