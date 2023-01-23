<?php
/*
DESCRIPTION:
Description:
Replace all vowel to exclamation mark in the sentence. aeiouAEIOU is vowel.

Examples
replace("Hi!") === "H!!"
replace("!Hi! Hi!") === "!H!! H!!"
replace("aeiou") === "!!!!!"
replace("ABCDE") === "!BCD!"
*/
function replace(string $s): string {
    // Write your code here
    $a = str_replace("a","!",$s);
    $b = str_replace("e","!",$a);
    $c = str_replace("i","!",$b);
    $d = str_replace("o","!",$c);
    $e = str_replace("u","!",$d);
    $f = str_replace("A","!",$e);
    $g = str_replace("E","!",$f);
    $h = str_replace("I","!",$g);
    $i = str_replace("O","!",$h);
    $j = str_replace("U","!",$i);
    return $j;
  }