<?php
$str = "abcdefghmabcefghm";
echo $str;

echo "<br>".FirstNotRepeatingChar($str);
function FirstNotRepeatingChar($str) {
    $arr = str_split($str);
    // print_r($arr);die;
   foreach ($arr as $key => $value) {

      if(substr_count($str,$value) == 1){
          return $key+1;
      }
   }
}
