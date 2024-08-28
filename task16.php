<?php
// Number Patterns
for ($a = 1; $a <= 5; $a++) {
    // Inner loop to print numbers from 1 to the current value of $i
    for ($b = 1; $b <= $a; $b++) {
        echo $b;
    }
    // Move to the next line after each row
    echo "<br>";
}
?>
