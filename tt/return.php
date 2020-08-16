<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2019/12/12
 * Time: 09:11
 */


$name = array("aaaa",'bbbb','ccccc');

function &test($n){
    global $name;
    return $name[$n];
}

$add = test(1);
//var_dump($add);exit;
$add = "dddd";
var_dump($add);
var_dump($name);














echo PHP_EOL;