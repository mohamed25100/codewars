<?php  
/*
DESCRIPTION:
The rgb function is incomplete. Complete it so that passing in RGB decimal values will result in a hexadecimal representation being returned. Valid decimal values for RGB are 0 - 255. Any values that fall out of that range must be rounded to the closest valid value.

Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here.

The following are examples of expected output values:

rgb(255, 255, 255) // returns FFFFFF
rgb(255, 255, 300) // returns FFFFFF
rgb(0,0,0) // returns 000000
rgb(148, 0, 211) // returns 9400D3
*/
    //update if rgb > 255 
    function n(){//array of 16 index we'll need it later
        $a = [1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F',0];
        return $a;
      }
      function red($a){
        $sixteen = 16;
        $red2 = n()[($a%16)-1];
      
        if($a > 255){
            return n()[14] . n()[14];
        }
        if ($a < 160){
          if($a < 16*10 && $a >= 16*9){
            return ($red2 !== null) ? 9 . $red2 : (($red2 == null)? 9 . 0 : false);
          }
          if ($a < 16*9 && $a >= 16*8){
            return ($red2 !== null) ? 8 . $red2 : (($red2 == null)? 8 . 0 : false);
          }
          if ($a < 16*8 && $a >= 16*7){
            return ($red2 !== null) ? 7 . $red2 : (($red2 == null)? 7 . 0 : false);
          }
          if ($a < 16*7 && $a >= 16*6){
            return ($red2 !== null) ? 6 . $red2 : (($red2 == null)? 6 . 0 : false);
          }
          if ($a < 16*6 && $a >= 16*5){
            return ($red2 !== null) ? 5 . $red2 : (($red2 == null)? 5 . 0 : false);
          }
          if ($a < 16*5 && $a >= 16*4){
            return ($red2 !== null) ? 4 . $red2 : (($red2 == null)? 4 . 0 : false);
          }
          if( $a < 16*4 && $a >= 48){
            return ($red2 !== null) ? 3 . $red2 : (($red2 == null)? 3 . 0 : false);
          }
          if ($a < 16*3 && $a >= 32){
            return ($red2 !== null) ? 2 . $red2 : (($red2 == null)? 2 . 0 : false);
          }
          if ($a < 32 && $a >= 16){
            return ($red2 !== null) ? 1 . $red2 : (($red2 == null)? 1 . 0 : false);
          }
          if ($a < 16 && $a >= 1){
            return (0 . $red2);
          }
          if ($a < 1){
            return 0 . 0;
          }
        }else{
          if (n()[($a%16)] === 1){
            if ($a == 160){
              return n()[9] . 0;
            }
            if ($a == 16*11){
              return n()[10] . 0;
            }
            if ($a == 16*12){
              return n()[11] . 0;
            }
            if ($a == 16*13){
              return n()[12] . 0;
            }
            if ($a == 16*14){
              return n()[13] . 0;
            }
            if ($a == 16*15){
              return n()[14] . 0;
            }
          };
      
          if ($a < 16*11 && $a > 16*10){
            return n()[9] . $red2;
          }
          if ($a < 16*12 && $a > 16*11){
            return n()[10] . $red2;
          }
          if ($a < 16*13 && $a > 16*12){
            return n()[11] . $red2;
          }
          if ($a < 16*14 && $a > 16*13){
            return n()[12] . $red2;
          }
          if ($a < 16*15 && $a > 16*14){
            return n()[13] . $red2;
          }
          if ($a < 16*16 && $a > 16*15){
            return n()[14] . $red2;
          }
        }
      }
      function green($a){
        $sixteen = 16;
        $green2 = n()[($a%16)-1];
        if($a > 255){
            return n()[14] . n()[14];
        }
        if ($a < 160){
          if($a < 16*10 && $a >= 16*9){
            return ($green2 !== null) ? 9 . $green2 : (($green2 == null)? 9 . 0 : false);
          }
          if ($a < 16*9 && $a >= 16*8){
            return ($green2 !== null) ? 8 . $green2 : (($green2 == null)? 8 . 0 : false);
          }
          if ($a < 16*8 && $a >= 16*7){
            return ($green2 !== null) ? 7 . $green2 : (($green2 == null)? 7 . 0 : false);
          }
          if ($a < 16*7 && $a >= 16*6){
            return ($green2 !== null) ? 6 . $green2 : (($green2 == null)? 6 . 0 : false);
          }
          if ($a < 16*6 && $a >= 16*5){
            return ($green2 !== null) ? 5 . $green2 : (($green2 == null)? 5 . 0 : false);
          }
          if ($a < 16*5 && $a >= 16*4){
            return ($green2 !== null) ? 4 . $green2 : (($green2 == null)? 4 . 0 : false);
          }
          if( $a < 16*4 && $a >= 48){
            return ($green2 !== null) ? 3 . $green2 : (($green2 == null)? 3 . 0 : false);
          }
          if ($a < 16*3 && $a >= 32){
            return ($green2 !== null) ? 2 . $green2 : (($green2 == null)? 2 . 0 : false);
          }
          if ($a < 32 && $a >= 16){
            return ($green2 !== null) ? 1 . $green2 : (($green2 == null)? 1 . 0 : false);
          }
          if ($a < 16 && $a >= 1){
            return (0 . $green2);
          }
          if ($a < 1){
            return 0 . 0;
          }
        }else{
          if (n()[($a%16)] === 1){
            if ($a == 160){
              return n()[9] . 0;
            }
            if ($a == 16*11){
              return n()[10] . 0;
            }
            if ($a == 16*12){
              return n()[11] . 0;
            }
            if ($a == 16*13){
              return n()[12] . 0;
            }
            if ($a == 16*14){
              return n()[13] . 0;
            }
            if ($a == 16*15){
              return n()[14] . 0;
            }
          };
      
          if ($a < 16*11 && $a > 16*10){
            return n()[9] . $green2;
          }
          if ($a < 16*12 && $a > 16*11){
            return n()[10] . $green2;
          }
          if ($a < 16*13 && $a > 16*12){
            return n()[11] . $green2;
          }
          if ($a < 16*14 && $a > 16*13){
            return n()[12] . $green2;
          }
          if ($a < 16*15 && $a > 16*14){
            return n()[13] . $green2;
          }
          if ($a < 16*16 && $a > 16*15){
            return n()[14] . $green2;
          }
        }
      }
      function blue($a){
        $sixteen = 16;
        $blue2 = n()[($a%16)-1];
      
        if ($a < 160){
          if($a < 16*10 && $a >= 16*9){
            return ($blue2 !== null) ? 9 . $blue2 : (($blue2 == null)? 9 . 0 : false);
          }
          if ($a < 16*9 && $a >= 16*8){
            return ($blue2 !== null) ? 8 . $blue2 : (($blue2 == null)? 8 . 0 : false);
          }
          if ($a < 16*8 && $a >= 16*7){
            return ($blue2 !== null) ? 7 . $blue2 : (($blue2 == null)? 7 . 0 : false);
          }
          if ($a < 16*7 && $a >= 16*6){
            return ($blue2 !== null) ? 6 . $blue2 : (($blue2 == null)? 6 . 0 : false);
          }
          if ($a < 16*6 && $a >= 16*5){
            return ($blue2 !== null) ? 5 . $blue2 : (($blue2 == null)? 5 . 0 : false);
          }
          if ($a < 16*5 && $a >= 16*4){
            return ($blue2 !== null) ? 4 . $blue2 : (($blue2 == null)? 4 . 0 : false);
          }
          if( $a < 16*4 && $a >= 48){
            return ($blue2 !== null) ? 3 . $blue2 : (($blue2 == null)? 3 . 0 : false);
          }
          if ($a < 16*3 && $a >= 32){
            return ($blue2 !== null) ? 2 . $blue2 : (($blue2 == null)? 2 . 0 : false);
          }
          if ($a < 32 && $a >= 16){
            return ($blue2 !== null) ? 1 . $blue2 : (($blue2 == null)? 1 . 0 : false);
          }
          if ($a < 16 && $a >= 1){
            return (0 . $blue2);
          }
          if ($a < 1){
            return 0 . 0;
          }
        }else{
            if($a > 255){
                return n()[14] . n()[14];
            }
            //check if our number is integer after /16
          if (n()[($a%16)] === 1){
            if ($a == 160){
              return n()[9] . 0;
            }
            if ($a == 16*11){
              return n()[10] . 0;
            }
            if ($a == 16*12){
              return n()[11] . 0;
            }
            if ($a == 16*13){
              return n()[12] . 0;
            }
            if ($a == 16*14){
              return n()[13] . 0;
            }
            if ($a == 16*15){
              return n()[14] . 0;
            }
          };
          //check if our number >160  
          if ($a < 16*11 && $a > 16*10){
            return n()[9] . $blue2;
          }
          if ($a < 16*12 && $a > 16*11){
            return n()[10] . $blue2;
          }
          if ($a < 16*13 && $a > 16*12){
            return n()[11] . $blue2;
          }
          if ($a < 16*14 && $a > 16*13){
            return n()[12] . $blue2;
          }
          if ($a < 16*15 && $a > 16*14){
            return n()[13] . $blue2;
          }
          if ($a < 16*16){
            return n()[14] . $blue2;
          }
        }
      }
      function rgb($r,$g,$b):string{//resultat red && green && blue
        $result = [];
        array_push($result, red($r),green($g),blue($b));
        return join($result);
      }
      echo rgb('20'.'06'.'00',127,0);//my best color :)