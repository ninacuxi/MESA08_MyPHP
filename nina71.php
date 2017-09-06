<?php
$json = file_get_contents('http://localhost/nina69.php');
$root = json_decode($json);
var_dump($root);
echo'<hr>';
foreach ($root as $key => $value){
    echo"{$key} : {$value}<br>";
}