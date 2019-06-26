<?php

$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
$target = 4 ;

function find($array,$target){

    foreach ($array as $k => $v) {
       foreach ($v as $i => $j) {
           if ($target == $j) {
               return true;die();
           }
       }
    }
}

var_dump(find($array,$target));