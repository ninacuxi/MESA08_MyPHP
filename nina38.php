<?php
    //1.創畫布（1.空白2.既有圖
    $imgS = imagecreatefromjpeg("./imgs/w.jpeg");
    $imgT = imagecreate(200,200);

    //2.開始畫
    $imgSW = imagesx($imgS);
    $imgSH = imagesy($imgS);

    if($imgSH>$imgSW){
        //長型
        $imgTH = 200;
        $imgTW = $imgSW * $imgTH / $imgSH ; //400* 200/50 =>400*4倍
    }else{
        //寬型
        $imgTW = 200;
        $imgTH = $imgSH * $imgTW / $imgSW;
    }
//    echo"{$imgSW} x {$imgSH}";
    $white = imagecolorallocate($imgT,255,255,255);
    imagefilledrectangle($imgT,0,0,200,200,$white);
    imagecopyresized($imgT,$imgS,0,0,0,0,
        $imgTW,$imgTH,$imgSW,$imgSH)   ;

    //3.記憶體 -> 輸出（1.畫面2.檔案）
    header("content-type: image/jpeg");
    imagejpeg($imgT);

    //4.清除
    imagedestroy($imgS);
    imagedestroy($imgT);