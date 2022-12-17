<?php 
/*
DESCRIPTION:
Given an array of integers.

Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers. 0 is neither positive nor negative.

If the input is an empty array or is null, return an empty array.

Example
For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].
*/
function countPositivesSumNegatives($input):array {
    $vide = [];
    if(count($input)< 2){
      if ($input[0] == false){
        return $vide;
      }
    }
    $aa = 0;
    $b = 0;
    foreach ($input as $a){
      $aa+=  $a < 0 ? $a:0;
    }
    foreach ($input as $a){
      $b+=  $a > 0 ? 1:0;
    }
    $arr = [];
    array_push($arr,$b,$aa);
    //print_r($arr);
    return $arr; 
  }