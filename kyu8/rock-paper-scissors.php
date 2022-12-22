<?php
/*
DESCRIPTION:
Rock Paper Scissors
Let's play! You have to return which player won! In case of a draw return Draw!.

Examples(Input1, Input2 --> Output):

"scissors", "paper" --> "Player 1 won!"
"scissors", "rock" --> "Player 2 won!"
"paper", "paper" --> "Draw!"
*/
function rpc ($p1, $p2) {
    echo $p1;
      if ( $p1 == 'scissors')
      { return $p2 == 'scissors' ? "Draw!" :
      ( $p2 == 'rock' ? "Player 2 won!" : "Player 1 won!");}
        if ( $p1 == 'rock')
  
      { return $p2 == 'rock' ? "Draw!" :
  
      ( $p2 == 'scissors' ? "Player 1 won!" : "Player 2 won!");}
    
        if ( $p1 == 'paper')
      { return $p2 == 'paper' ? "Draw!" :
      ( $p2 == 'rock' ? "Player 1 won!" : "Player 2 won!");}
  }