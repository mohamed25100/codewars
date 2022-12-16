<?php
/*
DESCRIPTION:
Introduction
The first century spans from the year 1 up to and including the year 100, the second century - from the year 101 up to and including the year 200, etc.

Task
Given a year, return the century it is in.

Examples
1705 --> 18
1900 --> 19
1601 --> 17
2000 --> 20
*/
function centuryFromYear($year)
{
  $a = str_split($year);
  $y = count($a)-1;
  $yy = $a[$y];
  array_pop($a);
  array_pop($a);
  if (count($a)== 2){
  return ($yy == 0) ? implode($a):implode($a)+1; 
  }
  else{
    return ($yy == 0) ? implode($a)+1:implode($a)+1;
  }
}
    echo (centuryFromYear(1705));
    echo (centuryFromYear(1900));
    echo (centuryFromYear(1601));
    echo (centuryFromYear(2000));