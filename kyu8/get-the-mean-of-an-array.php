<?php 
/*
DESCRIPTION:
It's the academic year's end, fateful moment of your school report. The averages must be calculated. All the students come to you and entreat you to calculate their average for them. Easy ! You just need to write a script.

Return the average of the given array rounded down to its nearest integer.

The array will never be empty.
*/
function get_average($a) {
    $b = null;
    foreach($a as $aa){
      $b += $aa;
    }
    return floor($b/count($a));
  }