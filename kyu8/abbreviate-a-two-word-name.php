<?php /*
DESCRIPTION:
Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.

The output should be two capital letters with a dot separating them.

It should look like this:

Sam Harris => S.H

patrick feeney => P.F
*/
function abbrevName($name)
{
$familyname = (explode(" ", $name))[1];
$a = str_split($name);
$b = str_split($familyname);
$bigname = strtoupper($a[0]);
$bigfamilyname = strtoupper($b[0]);
return $bigname.".". $bigfamilyname;
}