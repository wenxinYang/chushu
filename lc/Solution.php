<?php

/**
* @param Integer[] $nums
* @param Integer $target
* @return Integer[]
 * @desc 两数和  leetcode 第一题
*/
    function twoSum($nums, $target) {
        $i=0;
        $res=[];
        for($i;$i< count($nums); $i++){
            $a = $i+1;
            for ($a; $a < count($nums); $a++){
                $sum = $nums[$i] + $nums[$a];
                if($sum == $target){
                    return [$i,$a];
                }else{
                    continue;
                }

            }
        }
    }

    function twoSum2($nums,$target){
        for ($i=0; $i < count($nums); $i++){
            $val = $nums[$i];
            $tmp = $target-$val;
            if (in_array($tmp,$nums) ){
                return [$i, array_search($tmp,$nums)];
            }
        }
    }

    function twoSum3($nums,$target){
        $find = [];
        for ($i=0; $i<count($nums); $i++){
            if($a = array_keys($find,($target-$nums[$i]))){
                return [$a[0], $i];
            }
            $find[$i] = $nums[$i];
        }
    }

    function twoSum4($nums, $target){

        $find =[];
        for ($i=0; $i< count($nums); $i++){
            if(array_key_exists($target-$nums[$i], $find)){
                return [$find[$target-$nums[$i]],$i];

            }
        $find[$nums[$i]] = $i;

        }

    }

function test($nums,$target){
    $count = count($nums);
    if (count($nums) <2)  return null;

    for ($i=0; $i<$count; $i++){
        $a = $i+1;
        for ($a; $a<$count; $a++){
           if ($target == $nums[$i] + $nums[$a]){
               return [$i,$a];
           }
        }
    }

}

function test2($nums,$tag){
    for ($i=0; $i<count($nums); $i++){

        $tmp = $tag - $nums[$i];
        if (in_array($tmp,$nums)){
            return [$i,array_search($tmp,$nums)];
        }
    }

}

$nums = [ 2,7,11,15];
$target = 26;
$res = test2($nums,$target);
print_r($res);