<?php
/*
DESCRIPTION:
Baby Shark Lyrics
Create a function, as short as possible, that returns this lyrics.
Your code should be less than 300 characters. Watch out for the three points at the end of the song.

Baby shark, doo doo doo doo doo doo
Baby shark, doo doo doo doo doo doo
Baby shark, doo doo doo doo doo doo
Baby shark!
Mommy shark, doo doo doo doo doo doo
Mommy shark, doo doo doo doo doo doo
Mommy shark, doo doo doo doo doo doo
Mommy shark!
Daddy shark, doo doo doo doo doo doo
Daddy shark, doo doo doo doo doo doo
Daddy shark, doo doo doo doo doo doo
Daddy shark!
Grandma shark, doo doo doo doo doo doo
Grandma shark, doo doo doo doo doo doo
Grandma shark, doo doo doo doo doo doo
Grandma shark!
Grandpa shark, doo doo doo doo doo doo
Grandpa shark, doo doo doo doo doo doo
Grandpa shark, doo doo doo doo doo doo
Grandpa shark!
Let's go hunt, doo doo doo doo doo doo
Let's go hunt, doo doo doo doo doo doo
Let's go hunt, doo doo doo doo doo doo
Let's go hunt!
Run away,…
Good Luck!
*/
function babySharkLyrics(){$c="shark";$k="$c!\n";$h="Let's go hunt";return z("Baby ",$c).$k.z("Mommy ",$c).$k.z("Daddy ",$c).$k.z("Grandma ",$c).$k.z("Grandpa ",$c).$k.z($h,'')."!\nRun away,…";}function z($a,$b){$o=" doo doo";$c=",$o$o$o\n";return"$a$b$c$a$b$c$a$b$c$a";}
