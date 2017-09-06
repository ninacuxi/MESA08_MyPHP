<?php
    function sayYa($count,$name = 'World'){
        for($i=0;$$count;$i++){
            echo "Ya,{$name}<br>";
        }
    }

    function fx($x){
        return  2 * $x +1;

    }

    function test(){
        for($i=0;$i<func_get_args();$i++){
            echo func_get_arg($i).'<br>';

        }
    }

    function testv2(){
        $args =  func_get_args();
        foreach ($args as $v){
            echo "{$v}<br>";

        }

    }

    test(1,2,3,4,'Nina','iii',false);