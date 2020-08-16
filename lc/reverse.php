<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2020/3/5
 * Time: 15:53
 * desc: 给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。
 * link: https://leetcode-cn.com/problems/reverse-integer/
 */


    function reverse($x) {
        if($x <0){
            $x = abs($x);
            $x = strval($x);
            $x = -strrev($x);
        }else{
            $x = strval($x);
            $x = strrev($x);
        }
        //if ((pox(2,31)-1 < $x || $x < pox(-2,31)){
        if(2147483647 >= $x && $x >=-2147483648){
            return $x;
        }else{
            return 0;
        }
    }

function reverse1($x) {
    if($x<0){
        $y = -strrev(abs($x));
    }else{
        $y = strrev($x);
    }
    if(pow(-2,31)>$y || $y>pow(2,31)-1){
        $y = 0;
    }
    return $y;
}



echo reverse12(-123445);

    function reverse12($str){
        if ($str <0){
            $str = -strrev(abs($str));
        }else{
            $str = strrev($str);
        }

        if (pow(2,31)-1 < $str || $str > pow(-2,31)){
            return $str;
        }else{
            return 0;
        }
    }