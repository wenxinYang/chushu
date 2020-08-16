<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2019/8/18
 * Time: 15:34
 */

//$file = "/Users/yangwenxin/Desktop/a.log";
$file = "http://www.baidu.com";
$log = fopen($file,"r");
echo json_encode($log);