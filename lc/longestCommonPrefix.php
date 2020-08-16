<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2020/3/5
 * Time: 20:26
 * @desc: 最长公共前缀
 * link: https://leetcode-cn.com/problems/longest-common-prefix/
 */

/*
 * 解题思路：
 * 1. 求数组长度；
 * 2. 遍历第一个元素的每个字符，嵌套循环f循环源数组并取出除第一个元素外的 其他元素的每个字符， 与之进行diff。 都相同则拼接；否则输出。
 *
 */
function longestCommonPrefix($strs){
    $len = count($strs);
    $usr = '';
    if($len == 0) return $usr;
    for ($i=0; $i< strlen($strs[0]); $i++){
        $tag = $strs[0]{$i};
        for ($x=1;$x<$len; $x++){
            if($tag != $strs[$x]{$i}){
                return $usr;
            }
        }
        $usr = $usr.$tag;

    }
    return $usr;
}

function test($strs){
    $len = count($strs);
    $out = '';
    if($len == 0) return $out;
    for ($i=0; $i<strlen($strs[0]); $i++){
        $tag = $strs[0]{$i};
        for ($x=1; $x<$len; $x++){
            if ($tag != $strs[$x]{$i}){
                return $out;
            }
        }
        $out = $out.$tag;
    }
    return $out;

}
$strs = [""];
var_dump( test2($strs));

function test3($strs){

    $cout = count($strs);
    $str = '';
    if ($cout  == 0) return $str;
    $len = strlen($strs[0]);
    for ($i=0; $i<$len; $i++){
        $tmp = $strs[0]{$i};

        for ($a=1; $a<$cout-1; $a++){

            if ($tmp != $strs[$a]{$i}) {
                return $str;
            }
        }
        $str = $str.$tmp;
    }

    return $str;
}
