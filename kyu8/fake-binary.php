<?php 
/*
DESCRIPTION:
Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.

Note: input will never be an empty string
*/
function fake_bin(string $s):string {
    $a =  str_split($s);
    $result = null;
    foreach ($a as $aa){
      $result.= $aa >= 5 ? '1': '0';
    }
    return $result;
  }