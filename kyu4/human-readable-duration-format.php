<?php
/*
DESCRIPTION:
Your task in order to complete this Kata is to write a function which formats a duration, given as a number of seconds, in a human-friendly way.

The function must accept a non-negative integer. If it is zero, it just returns "now". Otherwise, the duration is expressed as a combination of years, days, hours, minutes and seconds.

It is much easier to understand with an example:

* For seconds = 62, your function should return 
    "1 minute and 2 seconds"
* For seconds = 3662, your function should return
    "1 hour, 1 minute and 2 seconds"
For the purpose of this Kata, a year is 365 days and a day is 24 hours.

Note that spaces are important.

Detailed rules
The resulting expression is made of components like 4 seconds, 1 year, etc. In general, a positive integer and one of the valid units of time, separated by a space. The unit of time is used in plural if the integer is greater than 1.

The components are separated by a comma and a space (", "). Except the last component, which is separated by " and ", just like it would be written in English.

A more significant units of time will occur before than a least significant one. Therefore, 1 second and 1 year is not correct, but 1 year and 1 second is.

Different components have different unit of times. So there is not repeated units like in 5 seconds and 1 second.

A component will not appear at all if its value happens to be zero. Hence, 1 minute and 0 seconds is not valid, but it should be just 1 minute.

A unit of time must be used "as much as possible". It means that the function should not return 61 seconds, but 1 minute and 1 second instead. Formally, the duration specified by of a component must not be greater than any valid more significant unit of time.
*/
function goku($n):int {$counter = 0;
    while ($n >= 60){
    $n = $n -60;
    $counter += 1;
  }return $counter;
}

function gon($h_only):int {
    $counter = 0;
    while ($h_only >= 24){
    $h_only = $h_only -24;
    $counter += 1;
  }return $counter;
}

function dragonball($d_only):int {
    $counter = 0;
    while ($d_only >= 365){
    $d_only = $d_only -365;
    $counter += 1;
  }return $counter;
}

function format_duration($seconds) {
  $minutes = goku($seconds);$hours = goku($minutes);$days = gon($hours);$years = dragonball($days);
  $s = [];//array to push string with or with-out the "s";
  $seconds % 60 == 1 ? array_push($s,"second"): array_push($s,"seconds");
  $minutes % 60 == 1 ? array_push($s,"minute"): array_push($s,"minutes");
  $hours % 24 == 1 ? array_push($s,"hour"): array_push($s,"hours");
  $days % 365 == 1 ? array_push($s,"day"): array_push($s,"days");
  $years % 1000 == 1 ? array_push($s,"year"): array_push($s,"years");
  $sec = ($s[0]);$min = ($s[1]);$h = ($s[2]);$d = $s[3];$y = $s[4];//push done

  $my_sec = $seconds%60;
  $my_min = $minutes%60;
  $my_hours = $hours%24;
  $my_days = $days%365;
  $my_years = $years%365;

  if($years == 0){
   if($days == 0){
     if ($hours == 0){
       if($minutes == 0){
         if ($seconds == 0){
           return "now";
         }
         return "$my_sec $sec";//sec only
       }
       if ($my_sec == 0){return "$my_min $min";}
       return "$my_min $min and $my_sec $sec";//min only
     }
     if ($my_sec == 0){return $my_min == 0 ? "$my_hours $h"
       :"$my_hours $h and $my_sec $sec";}
     return $my_min ? "$my_hours $h, $my_min $min and $my_sec $sec" :
     "$my_hours $h and $my_sec $sec";//hours only
   }
    if($my_hours == 0){
     if ($my_sec == 0){return "$my_days $d and $my_min $min";}
     return "$my_days $d, $my_min $min and $my_sec $sec";
   }
     if($my_min == 0){
     if ($my_sec == 0){return "$my_days $d and $my_hours $h";}
     return "$my_days $d, $my_hours $h and $my_sec $sec";
   }
      if($my_sec == 0){
     if ($my_hours !== 0){
       return $my_min == 0 ? "$my_days $d and $my_hours $h":
     "$my_days $d, $my_hours $h and $my_min $min";}
  }
 
   if($my_hours == 0){
    return  $my_min !== 0 && $my_sec !== 0 ? "$my_days $d, $my_min $min and $my_sec $sec":
    ( $$my_min !== 0 ? "$my_days $d and $my_min $min" :( "$my_days $d and $my_sec $sec" ));
   }
   return "$my_days $d, $my_hours $h, $my_min $min and $my_sec $sec";
 }
  if( $my_days && $my_hours && $my_min && $my_sec){
 return "$my_years $y, $my_days $d, $my_hours $h, $my_min $min and $my_sec $sec";}
  if($my_days && $my_hours && $my_min){
    return "$my_years $y, $my_days $d, $my_hours $h and $my_min $min";
  }
}