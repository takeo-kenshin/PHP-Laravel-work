<?php
function sum($a,$b){
    $a += $b;
    $b += $a;
    return $a;
    return $b;
}
echo sum(1,0);