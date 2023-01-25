<?php
/*
DESCRIPTION:
Write function RemoveExclamationMarks which removes all exclamation marks from a given string.
*/
function remove_exclamation_marks($string) {//preg_match_all($masque,$string,$arr);
    return str_replace("!","",$string);
    }