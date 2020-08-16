<?php
class Solution {

/**
* @param Integer[] $nums
* @param Integer $target
* @return Integer[]
*/

    public function twoSum($nums, $target){
        for ($i=0; $i<count($nums); $i++){

            for ($a=$i+1; $a<count($nums); $a++){

                if($target == $nums[$i]+$nums[$a]){
                    return [$i,$a];
                }
            }
        }

    }


}
$bo = new Solution();
$nums = [2, 7, 11, 15];
$target = 26;
$re = $bo->twoSum($nums,$target);
print_r($re);