<?php
/*
DESCRIPTION:
It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string. You're given one parameter, the original string. You don't have to worry with strings with less than two characters.
*/
function remove_char(string $s)
  {
    $a = NULL;
    for ($i = 1; $i < strlen($s)-1; $i++) {
      $a .= $s[$i];
    }
     return $a;
  }
  echo remove_char('eloquent');