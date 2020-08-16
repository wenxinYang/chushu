<?php


$i = 1;
do{
    $test = "test-".$i;
    echo $test;
    sleep(1);
    $i++;
    if ($i == 11){
        echo '               Done!!!'.date("Y-m-d H:i");
        echo PHP_EOL;
    }

}while($i <= 10);
