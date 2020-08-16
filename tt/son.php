<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2020/3/3
 * Time: 17:54
 */
//namespace algorithm;
//use algorithm\mom as mom;
include_once ("mom.php");
class son extends mom
{

    public $name;
    public  static $age = 19;

    public function say($name){
        $this->name = $name;

        echo "我的名字是：".$this->name."   年龄是：".self::$age."\n";
    }
    public function test(){

        parent::say();
    }
}
$user = new son();
$user->test();