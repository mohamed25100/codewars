<?php
/*
DESCRIPTION:
Write a method, that will get an integer array as parameter and will process every number from this array.

Return a new array with processing every number of the input-array like this:

If the number has an integer square root, take this, otherwise square the number.

Example
[4,3,9,7,2,1] -> [2,9,3,49,4,1]
Notes
The input array will always contain only positive numbers, and will never be empty or null.
*/

function squareOrSquareRoot($array) {
    $null = "";for ($i = 0; $i < count($array); $i++){
      $z = $array[$i];
      $o = 0;
    $null.=( ($z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) && 
              $z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) &&
              $z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) &&
              $z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) &&
              $z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) &&
              $z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) &&
              $z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) &&
              $z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) &&
              $z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) &&
              $z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) &&
              $z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) &&
              $z !== h($o) && $z !== h($o+=1) && $z !== h($o+=1) &&
              $z !== h(8) ) ? $z**2 : sqrt($z) );$null .= " ";
    }
    $n = explode(" ",$null);
    array_pop($n);
    //print_r($n);
    return $n;
    }function h($i):int{
    $a = $i+2;
    return pow($a,2);
    }
