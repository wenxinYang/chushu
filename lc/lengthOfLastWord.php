<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2020/3/12
 * Time: 00:41
 */


function lengthOfLastWord($s) {
    $newArr = explode(" ",trim($s));
    $count = count($newArr);
    $len = strlen($newArr[$count-1]);
    return $len;
}


$s = "a ";
$res = lengthOfLastWord($s);
echo  $res;