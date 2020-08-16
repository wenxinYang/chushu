<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2019/8/8
 * Time: 09:19
 */

class Car
{
    var $color;
    function __construct($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}

function print_vars($obj) {
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}

// 实例一个对象
$herbie = new Car("white");
//echo $herbie;
// 显示 herbie 属性
//echo "\therbie: Properties\n";
print_vars($herbie);
