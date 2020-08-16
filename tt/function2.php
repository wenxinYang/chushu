<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2019/8/12
 * Time: 23:54
 */

class test{

    var $a;

    public  function Myname(){

        echo $this->a;

    }


    public function __construct()
    {
        $this->a = 223;
    }

    public function __construct1(){

    }

    public  function test1(){
        $this->Myname();
        echo PHP_EOL;
        echo __LINE__;
        echo PHP_EOL;

    }
}

$ob = new test();
$ob->test1();