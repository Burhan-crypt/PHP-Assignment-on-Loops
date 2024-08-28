<?Php
// SUM OF ELEMENTS IN AN ARRAY USING LOOP
$array = array(4,8,12,16);

$sum = 0;   
        foreach ($array as $value) {
           $sum += $value;
        }
      echo "The Sum of Array Elements is: <br> $sum";  
?>
