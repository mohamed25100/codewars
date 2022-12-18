<?php /*
DESCRIPTION:
Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers.
*/
function even_or_odd(int $n): string {
	$a = $n%2;
  return $a === 0 ? 'Even' : 'Odd';
}