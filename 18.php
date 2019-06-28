<?php
$n = 10;
echo NumberOf1($n) ;
function NumberOf1($n){
    $len = 0 ;
    while ($n!=0) {
        if ($n%2==1) {
           $len++;
        }
        $n=$n/2;
    }
    return $len;
    
}