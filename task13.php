<?php
// Checking If radar is a Palindrome
$str = "radar";
    $rev = strrev($str);              /* strrev is a built - in function for reversing strings*/
    if ($str==$rev) {
        echo "$str is a Palindrome";
    }
    else {
        echo "$str is not a Palindrome";
    }
?>
