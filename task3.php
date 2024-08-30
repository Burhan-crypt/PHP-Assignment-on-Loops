<?php
//For Loops in PHP
echo "Checking if Numbers are Even or Odd <br>";
for ($num = 1; $num <= 20; $num++) { 
    if ($num % 2 === 0) {
        echo "The number $num is Even <br>";
    } else {
        echo "The number $num is Odd <br>";
    }
}
?>
