<?php

echo Sum_Solution(5);  

function Sum_Solution($n) {

    $r = 0 ; 
    $n && $r = (Sum_Solution($n-1)+$n);
    return $r;
}