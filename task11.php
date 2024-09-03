<?php
$str = "Hello World";
$vowels = ['a', 'e', 'i', 'o', 'u'];
$count = 0;
        for ($a=0; $a < strlen($str) ; $a++) {       /*strlen is a function in PHP*/
            if (in_array($str[$a], $vowels)) {     /*in_array is also a function of PHP*/
                $count++;
            }
        }
        echo "The number of vowels in $str are: " . $count;
?>
