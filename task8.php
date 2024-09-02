<?php
echo "Fibonacci Sequence in PHP";
echo "<br>";
$num = 10;

function fib($num) {
    if($num == 0) {
        return 0;
    }
    elseif ($num == 1){
        return 1;
    }
    else {
        return (fib($num-1) + fib($num-2));
    }   
}

for ($a = 0; ; $a++) { 
    $fib_value = fib($a);
    if ($fib_value > $num) {
        break; 
    }
    echo $fib_value . " ";
}
?>
