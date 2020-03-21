<?php
/*
$arr = array(1,3,5,7,9);
$product = array_product($arr);
echo $product;

?>
*/
function product($arr){
    $result = $arr[0];
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
$arr=array(1,3,5,7,9);
echo product($arr);
?>

