<?php
/*
DESCRIPTION:
If you can't sleep, just count sheep!!

Task:
Given a non-negative integer, 3 for example, return a string with a murmur: "1 sheep...2 sheep...3 sheep...". Input will always be valid, i.e. no negative integers.
*/
function countsheep($num){
    $counter = [];
    if($num == 0){return '';}
    else {
      $res = (range(1,$num));
      foreach($res as $r){
        array_push($counter,"$r sheep...");
      }
      return join('',$counter);
      
    }
  }