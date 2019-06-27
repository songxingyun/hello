<?php
$arr_A=[1,3,6,9] ;
$arr_B=[2,4,5,8,20];

print_r(Combine($arr_A,$arr_B)) ;

function Combine($array1,$array2){

    $arr = array_merge($array1,$array2);

    $count = count($arr);

    for ($i=1; $i <$count ; $i++) { 
        for ($j=0; $j <$count-1 ; $j++) { 
            if ($arr[$j]>$arr[$j+1]) {
                $c = $arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$c;
            }
        }
    }

    return $arr;
}