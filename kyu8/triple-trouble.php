<?php
/*
DESCRIPTION:
Triple Trouble
Create a function that will return a string that combines all of the letters of the three inputed strings in groups. Taking the first letter of all of the inputs and grouping them next to each other. Do this for every letter, see example below!

E.g. Input: "aa", "bb" , "cc" => Output: "abcabc"

Note: You can expect all of the inputs to be the same length.
*/
function triple_trouble(string $one, string $two, string $three): string {
    // Your code here
    $arr = [];
    for ($i = 0;$i<strlen($one);$i++){
      array_push($arr,$one[$i].$two[$i].$three[$i]);
    }
    return join('',$arr);
}