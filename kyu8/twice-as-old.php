<?php
/*
DESCRIPTION:
Your function takes two arguments:

current father's age (years)
current age of his son (years)
Сalculate how many years ago the father was twice as old as his son (or in how many years he will be twice as old). The answer is always greater or equal to 0, no matter if it was in the past or it is in the future.
*/
function twice_as_old($dad, $son) {
    $d = $dad;$s=$son; 
    //echo $dad;echo " ";echo $son*2;
    while ($dad > $son*2){
      $a .= 1;$dad-=1;
    }
    while ($dad < $son*2){
      $b .= 1;$dad+=1;
    }
    if($d > $s*2){ return strlen($a);}
    if($d < $s*2){ return strlen($b);}
  }