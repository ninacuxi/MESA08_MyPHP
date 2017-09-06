<?php

//JSON陣列是值

$a = array(1,2,3,'Nina',5,true);
//echo json_encode($a);
//echo'<hr>';

$b = array(1,'name'=>'nina',3,'stage'=>4,5);  //Object物件
//echo json_encode($b);
//echo'<hr>';

class Member{
    var $name,$id;
}

class MyCart{
    var $list;
    var $member;
}

$m1 = new Member(); $m1->id = '001';$m1->name = 'Nina';
$cart1 = new MyCart();$cart1->member = $m1;
$cart1->list = array('P001'=>12,'P004'=>3,'P008'=>13);

$m2 = new Member(); $m2->id = '002';$m2->name = 'Larry';
$cart2 = new MyCart();$cart2->member = $m2;
$cart2->list = array('P003'=>2,'P014'=>31);

$m3 = new Member(); $m3->id = '003';$m3->name = 'Albee';
$cart3 = new MyCart();$cart3->member = $m3;
$cart3->list = array('P011'=>123,'P024'=>13,'P108'=>3);

$c = array($cart1,$cart2,$cart3);

echo json_encode($c);
//echo'<hr>';