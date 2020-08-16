<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2020/3/12
 * Time: 10:18
 */


    function removeDuplicates(&$arr){
        $count = count($arr);
        $tmp = [];

        for ($i=0; $i<$count; $i++){

            if ($arr[$i] == $arr[$i+1]){
                $tmp[] = $i;
            }
        }

        foreach ($tmp as $value){
            unset($arr[$value]);
        }
        return $arr;

    }


