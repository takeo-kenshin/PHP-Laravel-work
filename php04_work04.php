<?php
/*

function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
    if($max_number<$a){
        $max_number=$a;
    }
    echo $max_number;
 }
 return $max_number;
}
 $arr = array(1,3,9,6);
 echo max_array($arr);
*/


function max_array($arr){
 $max_number = $arr[0];
 for($i=0; $i<count($arr); $i++){
    if($max_number<$arr[$i]){
        $max_number=$arr[$i];
    }
    echo $max_number;
 }
 return $max_number;
}
 $arr = array(1,3,9,6);
 echo max_array($arr);
?>
