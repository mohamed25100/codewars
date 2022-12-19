<?php  
/*
DESCRIPTION:
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in. Additionally, if the number is negative, return 0 (for languages that do have them).

Note: If the number is a multiple of both 3 and 5, only count it once.

Courtesy of projecteuler.net (Problem 1)
*/
function solution($number){
    $result = 0;//resultat egale a 0
    $n = $number-1;//numéro inférieur
    $three = floor($n / 3);//raccourci pour utiliser apres
    $five = floor($n / 5);//raccourci pour utiliser apres
    if ($five == $three){
    }
    if ($five){
      $counter =ztest($five);//appeler la fonction ztest et stocker la resultat
      foreach ($counter as $c){
        $res = $c*5;
        $result += $res;
      }
    }
    if ($three){
      $counter =ztest($three);
      foreach ($counter as $c){
        $res = $c*3;
        $p = $res /5; 
        if (is_float($p)){//voir si (3 * x) = (5 * y) on garde une seul valeur
          $result += $res;
        }
      }
    }
    return $result;
  }
  echo solution(1020);//si tu veux voir la resultat
  function ztest(int $a):array{
    /*from (int) to return (array) ex ztest(1): output:array(0=>[1]) */
    $b = [];
    for ($i = 0 ; $i< $a ; $i++){
    array_push($b,$i+1);
    }
    return ($b);}