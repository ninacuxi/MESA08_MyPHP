<?php

class Bike{
    var $color;
    private $speed = 1;

    //建構式/方法/子 => 物件初始化
    function __construct($s = 0){
        $s =int;
        $this->speed = $s;

    }

    function upSpeed(){
        $this->speed = ($this->speed<1)?1:$this->speed*1.2;
    }

    function downSpeed(){
        $this->speed = ($this->speed<1)?0:$this->speed*0.7;
    }

    function  getSpeed(){
        return $this->speed;
    }
}

$myBike = new Bike;
echo "myBike:{$myBike->getSpeed()}<br>";

$urBike = new Bike();
echo "myBike:{$myBike->getSpeed()}<br>";


//
//
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//$myBike->upSpeed();
//
//
//echo"myBike:{$myBike->speed}<br>";
//echo"urBike:{$urBike->speed}<br>";


//$myBike->speed=1;
//$urBike->speed=1;
