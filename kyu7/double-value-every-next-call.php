<?php

/*
This kata is about static method that should return different values.

On the first call it must be 1, on the second and others - it must be a double from previous value.

Look tests for more examples, good luck :)
*/

class A
{ 
    
 public static function getNumber(): int{
   global $a;
  $a *= 2;
   $a < 1 ? $a = 1 : $a;
   return $a;
   }
}