<?php
// CHECKING THE FREQUECY OF NUMBERS IN AN ARRAY USING FOREACH LOOP
$array = [4, 8, 4, 12, 16, 8, 16];
$freq = array_count_values($array);  /*array_count_values is the php function to count the occurrences of each unique value in the $array  */
krsort($freq);  // Order array by score descending.

    foreach ($freq as $value => $count) {
       echo "Element $value occurs $count Times <br>";
    }
?>
