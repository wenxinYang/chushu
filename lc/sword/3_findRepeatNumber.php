<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2020/8/16
 * Time: 22:29
 */

class Solution
{

    function findRepeatNumber($nums){
        $cou =  count($nums);
        $repeatNum = [];

        for ($x=1; $x<$cou; $x++){
            for ($y=0; $y<$x; $y++){
                if ($nums[$y] == $nums[$x]){
                    return $nums[$y];
                }
            }
        }
    }

    function findRepeatNumber1($nums){
        $cou =  count($nums);
        for ($i=1; $i<$cou; $i++){
//            echo $i."\n";
            for ($x=0; $x<=$i-1; $x++){
                if ($nums[$i] == $nums[$x]){
                    return $nums[$i];
                }
            }
        }
    }

    function test($num){
        for ($i=0; $i<count($num); $i++){
            printf($num[$i]."\n");
        }
    }


    function findRepeatNumber2($nums){
        $count = array_count_values($nums);

        foreach ($count as $k=>$v){
            if ($v>1){
                return $k;
            }
        }

    }

    function findRepeatNumber3($nums){
        $map = [];

        foreach ($nums as $k=>$v){
            if ($map[$v] == 1){
                return $v;
            }
            $map[$v] = 1;
        }
        return -1;
    }

}

$num = [3, 1, 2, 3];
$obj1 = new Solution();
//$re = $obj1->findRepeatNumber1($num);
//print_r($re);


$obj1->test($num);