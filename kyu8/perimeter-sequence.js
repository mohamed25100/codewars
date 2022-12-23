/*
DESCRIPTION:
Perimeter sequence
The first three stages of a sequence are shown.

blocks

The blocksize is a by a and a ≥ 1.

What is the perimeter of the nth shape in the sequence (n ≥ 1) ?
*/
function perimeterSequence(a,n) {
    return a == 1 && n == 3 ? 12: a*n*4;
  }