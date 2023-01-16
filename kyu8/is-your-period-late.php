<?php
/*
DESCRIPTION:
In this kata, we will make a function to test whether a period is late.

Our function will take three parameters:

last - The Date object with the date of the last period

today - The Date object with the date of the check

cycleLength - Integer representing the length of the cycle in days

Return true if the number of days passed from last to today is greater than cycleLength. Otherwise, return false.
*/

function periodIsLate($last, $today, $cycleLength) {
    $c = $cycleLength; $l = $last; $t = $today;
    
    /*day 07-13 ~ 08-16*/
    $last_d = $l->format('d');//print_r( $last_d);
    
    $today_d = $t->format('d');//print_r( $today_d);
    
    /*month*/
    
    $last_m = $l->format('m');//print_r( $last_m);
    
    $today_m = $t->format('m');//print_r( $today_m);
   
    $res_m = $today_m - $last_m;
    $res_d = $today_d - $last_d;
    
    
    $resultat = strtotime($today->format("Y-m-d")) -  strtotime($last->format("Y-m-d"));
    $res_days = $resultat /(3600*24);
    echo $res_days;
    return $res_days > $c ? true : false;
  }
  
  
  //algo : true if days(last & today > $res)