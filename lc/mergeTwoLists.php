<?php
/**
 * Created by PhpStorm.
 * User: yangwenxin
 * Date: 2020/3/9
 * Time: 12:28
 */


    function mergeTwoLists($l1,$l2){

        if (empty($l1)) return $l2;
        if (empty($l2)) return $l1;

        if ($l1->val <= $l2->val){
            $l1->next = $this->mergeTwoLists($l1->next,$l2);
            return $l1;
        }else{
            $l2->next = $this->mergeTwoLists($l1,$l2->next);
            return $l2;
        }
    }

$l1 = [1,2,3];
$l2 = [2,4,6];
//$l1 = "1->2->4";
//$l2 = "1->3->4";
$l1 = '1->2->4';
$l2 = '1->3->4';
print_r(mergeTwoLists($l1,$l2));



function mergeTwoLists1($l1,$l2){

    if (empty($l1)) return $l2;
    if (empty($l2)) return $l1;


    if ($l1->val <= $l2->val){
        $l1->next = $this->mergeTwoLists1($l1->next,$l2);
        return $l1;
    }else{
        $l2->next = $this->mergeTwoLists1($l1,$l2->next);
        return $l2;

    }

}