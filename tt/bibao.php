<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2019/12/14
 * Time: 15:32
 */
/*function test(){

    $bibao = function ($a){
        echo $a;
    };

    $bibao("this is test");
}

test();*/
$num = 1;
$arr = array("a","bb","ccccccc","dddd","e");
usort(
    $arr,
    function ($a,$b){
        global $num;xue
        echo $a."----".$b."-----".$num."\n";
        $num++;

        return strlen($a) -strlen($b);
    }

);

print_r($arr);