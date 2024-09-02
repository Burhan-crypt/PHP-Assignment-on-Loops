<?php
for ($num=1; $num <= 50 ; $num++) { 
    $checkNum = 0;
    for ($prime=2; $prime <= sqrt($num); $prime++) { 
        if ($num % $prime == 0) {
            $checkNum++;
            break;
        }
    }
  
    if ($checkNum == 0) {
        echo "<br> Prime Number" . $num;
    }
}

?>
