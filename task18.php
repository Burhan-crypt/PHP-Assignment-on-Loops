<?php
// CHECKING IF 153 IS AN ARMSTRONG NUMBER
$num = 153;
$n = $num;
$sum = 0;   
while ($num!=0) {
    $rem = $num % 10;
    $sum = $sum + pow($rem, 3);
    $num = $num/10;
}
if ($sum == $n) {
    echo "$n Is an Armstron Number!";
}else {
    echo "$n Is Not an Armstrong Number!";
}
?>
