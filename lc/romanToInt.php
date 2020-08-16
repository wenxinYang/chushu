<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2020/3/5
 * Time: 17:07
 * $desc:  13. 罗马数字转整数
 * link: https://leetcode-cn.com/submissions/detail/51391420/
 */


/*
 * 解题思路：
 * 1. 计算出长度；
 * 2. 进行for循环
 * 3. 前大后小先加前，前小后大后减前
 * 4. 求和
 */
function romanToInt($s) {
    $map = array(
        'I'=>1,
        'V'=>5,
        'X'=>10,
        'L'=>50,
        'C'=>100,
        'D'=>500,
        'M'=>1000
    );
    $count = strlen($s);
    $sum = 0;
    for($i=0; $i< $count;$i++ ){
        if( $map[$s{$i}] >= $map[$s{$i+1}]){ //前大后小 先加
            $sum = $sum + $map[$s{$i}] ;
        }else{
            $sum = $sum + ($map[$s{$i+1}] - $map[$s{$i}]) ;  // 前小后大  后减前  在加
            $i++; //关键
        }
    }
    return $sum;
}
echo romanToInt('MCMXCIV');




//2020.3.12

function test($s){
    $map = array(
        'I'=>1,
        'V'=>5,
        'X'=>10,
        'L'=>50,
        'C'=>100,
        'D'=>500,
        'M'=>1000
    );

    $len = strlen($s);
    $sum = 0;
    for ($i=0; $i<$len; $i++){

        if ($map[$s{$i}] >= $map[$s{$i+1}]){
            $sum = $sum + $map[$s{$i}];
        }else{
            $sum = $sum + ($map[$s{$i+1}] - $map[$s{$i}]);
            $i++;
        }

    }
    echo $sum;

}

$a = "MCMXCIV";
test($a);