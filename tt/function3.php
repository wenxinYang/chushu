<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2019/8/13
 * Time: 23:56
 */

class function3{

    public function __construct()
    {
        echo "这是构造函数".PHP_EOL;
    }


    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "这是析构函数".PHP_EOL;
    }
}
$ob = new function3();
echo "----".PHP_EOL;

strpos();
    //todo test