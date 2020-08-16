<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2020/3/12
 * Time: 00:22
 */

    function defangIPaddr($address) {
        $newArr = explode(".",$address);
        $newStr = $newArr[0];
        for ($i=1; $i<count($newArr); $i++){
            $newStr = $newStr.'[.]'.$newArr[$i];
        }
        return $newStr;
    }

$address = "1.1.1.1";
//defangIPaddr($address);


    function defangIPAddr1($addres){
        $newArr = explode('.',$addres);
        $newStr = $newArr[0];
        for ($i=1; $i<count($newArr); $i++){
            $newStr = $newStr."[.]".$newArr[$i];
        }
        echo  $newStr;
    }



$address = "1.1.1.1";
defangIPaddr1($address);