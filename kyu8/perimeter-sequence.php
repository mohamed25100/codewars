<?php 
/*
DESCRIPTION:
Perimeter sequence
The first three stages of a sequence are shown.

blocks

The blocksize is a by a and a ≥ 1.

What is the perimeter of the nth shape in the sequence (n ≥ 1) ?
*/
function perimeter_sequence(int $a, int $n): int {
  return $a*$n*4;
}