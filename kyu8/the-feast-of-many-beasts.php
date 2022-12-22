<?php
/*
DESCRIPTION:
All of the animals are having a feast! Each animal is bringing one dish. There is just one rule: the dish must start and end with the same letters as the animal's name. For example, the great blue heron is bringing garlic naan and the chickadee is bringing chocolate cake.

Write a function feast that takes the animal's name and dish as arguments and returns true or false to indicate whether the beast is allowed to bring the dish to the feast.

Assume that beast and dish are always lowercase strings, and that each has at least two letters. beast and dish may contain hyphens and spaces, but these will not appear at the beginning or end of the string. They will not contain numerals.
*/
function feast($beast, $dish){
    $a = (explode(" ",$beast));$b = (explode(" ",$dish));
    
    $aa = ($a[0]);
    $bb = ($b[0]);
    $cc = ($a[count($a)-1]);
    $dd = ($b[count($b)-1]);
    
    $aaa = strrev($aa);$bbb = strrev($bb);
    $one = substr($aaa,-1);
    $two = substr($bbb,-1);
    $three = substr($cc,-1);
    $four = substr($dd,-1);
    
    $one == $two ?  $t = 1 : $t = 0;
    $t;
    if ($t == 0){return false;}
    else{return $three == $four ? true:false;}
  }