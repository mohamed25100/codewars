<?php
/*
DESCRIPTION:
Is the string uppercase?
Task
Create a method to see whether the string is ALL CAPS.

Examples (input -> output)
"c" -> False
"C" -> True
"hello I AM DONALD" -> False
"HELLO I AM DONALD" -> True
"ACSKLDFJSgSKLDFJSKLDFJ" -> False
"ACSKLDFJSGSKLDFJSKLDFJ" -> True
In this Kata, a string is said to be in ALL CAPS whenever it does not contain any lowercase letter so any string containing no letters at all is trivially considered to be in ALL CAPS.
*/
function is_uppercase($str) {
    $str2 = $str;
    $masque2 = '/[a-z]/';
    preg_match_all($masque2,$str2,$tb2);
    $b = implode("", $tb2[0]);
    $masque1 = '/[A-Z]/';preg_match_all($masque1,$str,$tb1);//no need;)
    $a = implode("", $tb1[0]);//no need;) haha 
    return  $b == null ? true : false;
    }