<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2020/3/6
 * Time: 10:32
 * @desc： 检查是否有效括号
 * @link: https://leetcode-cn.com/problems/valid-parentheses/
 */


//解题思路： 1. 判断是否是回文,如是说明有效；   2. 如无效，继续判断，用$str{0} =? $str{1}  $str{2} =? $str{3}依次判断，如等有效。

/*    function isValid($s) {

        $count = strlen($s);
        if (1 == $count % 2 || $count ==0 ){
            return false;
        }

        $relueLeft = ['(', '{','['];
        $relueRight = [')','}',']'];

        $s_Rev = strrev($s);
        if ($s == $s_Rev){  //是回文，且奇数个跟偶数个的规则在定义里，说明是有效

            for ($i=0; $i<$count; $i++){

                if (!in_array($relueLeft, $s{$i}) || !in_array($relueRight,$s{$i+1})){
                    return false;
                }
                $i++;

            }
            return true;
        }else {

            for ($i=0; $i<$count; $i++){

                if ($s{$i} != strrev($s{$i+1}) || !in_array($relueLeft,$s{$i})){
                    return false;
                }
                $i++;
            }
            return true;
        }
    }*/



function isValid($s){
    $count = strlen($s);
    if (1 == $count % 2  ){
        return false;
    }elseif ($count == 0){
        return true;
    }

    $relueLeft = ['(', '{','['];
    $relueRight = [')','}',']'];

    $arr = [];
    for ($i=0; $i<$count; $i++){
        if (in_array($s{$i},$relueLeft)){
            $arr[$i] = $s{$i};
        }else{
            if (array_search($s{$i},$relueRight) != array_search(array_pop($arr),$relueLeft) ){
                return false;
            }
        }
    }
    if(!empty($arr)) {
        return false;
    }
    return true;

}



function isValid1($s)
{

    $count = strlen($s);
    if (1 == $count % 2) {
        return false;
    } elseif ($count == 0) {
        return true;
    }
    $left = ['(', '{', '['];
    $right = [')', '}', ']'];
    $match = [
        '(' => ')',
        '{' => '}',
        '[' => ']',
    ];

    $stack = [];
    for ($i = 0; $i < $count; $i++) {
        $str = $s[$i];

        if (in_array($str, $left)) { // 遍历得到左括号，入栈
            array_push($stack, $str);
        } elseif (in_array($str, $right)) { // 遍历得到右括号
            // 左括号已匹配完，还有右括号
            // 取栈顶元素比较是否匹配
            $top = array_pop($stack);
            if ($match[$top] != $str) {
                return false;
            }
        }

    }

    // 空栈，表示完全匹配
    if (!empty($stack)) {
        return false;
    } else {
        return true;
    }
}

$s = "{[()]}";


