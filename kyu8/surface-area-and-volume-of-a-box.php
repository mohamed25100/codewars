<?php
/*
DESCRIPTION:
Write a function that returns the total surface area and volume of a box as an array: [area, volume]

GEOMETRYFUNDAMENTALS
*/
function getSize($width, $height, $depth) {
    $w=$width;$h=$height;$d=$depth;
    return [2*($w*$d+$w*$h+$d*$h),$w*$h*$d]; // 2(wd+wh+dh) math :) w*h*d
  }