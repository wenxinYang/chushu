<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2019/12/14
 * Time: 17:53
 */

$arr = array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5,"e"=>6);
$arr1 = json_encode($arr);
print_r(json_decode($arr1,true));

echo $arr["a"];