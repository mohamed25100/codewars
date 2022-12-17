<?php 
/*
DESCRIPTION:
Write a function which calculates the average of the numbers in a given list.

Note: Empty arrays should return 0.
*/
function find_average($array) {
    if($array[0] == ""){
      return 0;
    }
    else {
      $b = 0;
      foreach ($array as $a){
        $b +=$a;
      }
      return $b/count($array);
    };
  }