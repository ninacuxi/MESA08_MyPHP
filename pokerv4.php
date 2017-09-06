<?php
    //洗牌
    $poker = range(0,51);
    shuffle($poker);
//    foreach ($poker as $k => $v){
//        echo"{$k}:[$v]<br>";
//    }

    // 發牌
//    $players = array(array(),array(),array(),array());
    foreach ($poker as $k => $v){
        $players[$k%4][(int)($k/4)] = $v; //$players[第幾家][第幾張] = $v
    }

//驗算第一家牌對不對
//    foreach ($players[1] as $v){
//        echo"{$v}<br>";
//    }

    //攤牌
    $patterns = array('&spades;',
        '<font color="red">&hearts;</font>',
        '<font color="red">&diams;</font>',
        '&clubs;');
    $values = array('A',1,2,3,4,5,6,7,8,9,'J','Q','K');
    echo'<table border="1" width="100%">';
    foreach ($players as $player){
        echo '<tr>';
        foreach ($player as $card){
            echo'<td>';
            $pattern = (int)($card/13);
            $value = $card % 13;
            echo"{$patterns[$pattern]}{$values[$value]}";
            echo '</td>';
        }
       echo'</tr>';
    }
    echo'</table>'
?>
<!--<table>-->
<!--    <tr>-->
<!--        <td>card</td>-->
<!--        <td>card</td>-->
<!--        <td>card</td>-->
<!--        <td>card</td>-->
<!--    </tr>-->
<!--</table>-->
