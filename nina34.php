<?php
    // 1.
    $upload = $_FILES['upload'];

    foreach ($upload['erroe'] as $k => $v){
        if ($v == 0){
            copy("{$upload['tmp_name'][$k]}",
                "./upload/{$upload['name'][$k]}");
        }
    }