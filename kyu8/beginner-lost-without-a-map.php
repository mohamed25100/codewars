<?php
/*
DESCRIPTION:
Given an array of integers, return a new array with each value doubled.

For example:

[1, 2, 3] --> [2, 4, 6]
*/
function maps($x)
{
$a = null;
foreach($x as $xx){
$a.= zspace(""). (2*$xx);
}
$aa = (explode(' ', $a));
array_shift($aa);
return ($aa);
}
/*space :) */ function zspace($a){
  $br = ' ';return $a.$br;
}