<?php

    //1.創畫布（1.空白2.既有圖
    $img = imagecreatefromjpeg("./imgs/mini.jpeg");

    //2.開始畫
    $red = imagecolorallocate($img,255,0,0);
    imagettftext($img,24,20,20,70,$red,
        "./fonts/fireflysung.ttf","ㄌㄩㄝ");

    //3.記憶體 -> 輸出（1.畫面2.檔案）
    header('content-type: image/jpeg');
    imagejpeg($img,"./upload/brad.jpg");
    //4.清除
    imagedestroy($img);