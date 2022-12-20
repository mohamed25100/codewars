<?php 
/*
DESCRIPTION:
Given a non-empty array of integers, return the result of multiplying the values together in order. Example:

[1, 2, 3, 4] => 1 * 2 * 3 * 4 = 24
*/
function grow($a) {
    $b = 1;
    for($i = 0; $i < count($a) ; $i++){
      $b *= $a[$i];
    }
    return $b;
}