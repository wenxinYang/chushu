<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2020/3/12
 * Time: 09:32
 */


    function isPalindrome($x){

        if ($x < 0) return false;

        return $x == strrev($x)? true : false;
    }

