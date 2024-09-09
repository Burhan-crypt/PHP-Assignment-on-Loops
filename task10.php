<?php
echo "Task 10 Find Largest Number <br>";
function largestnumber($array) {
   $largest = $array[0];
   
   foreach ($array as $element) {
    if ($element  > $largest) {
       $largest = $element;
      }
   }
   return $largest;
}
$numbers =  array(23, 12, 56, 74, 4, 19);
echo  "<br>The Largest Number is " . largestnumber($numbers) . "<br>";
?>
