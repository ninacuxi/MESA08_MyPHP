<?php
    // 1.
    $upload = $_FILES['upload'];

    if ($upload['error'] == 0){
        if(copy("{$upload['tmp_name']}","./upload/{$upload['name']}")){
            // copy success
            echo 'Upload Ok';
        }else{
            // copy fail
            echo 'Copy erro';
        }

    }else{
        // error
        echo 'Upload Fail';
    }