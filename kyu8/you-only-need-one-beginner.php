<?php 
/*
DESCRIPTION:
You will be given an array a and a value x. All you need to do is check whether the provided array contains the value.

Array can contain numbers or strings. X can be either.

Return true if the array contains the value, false if not.
*/
function solution($a, $x) {
    for ($i = 0; $i< count($a); $i++){
      switch($a[$i]){
        case $x:
        return true;
        }
    }
    return false;
  }