<?php
// Using Arrays with Foreach Loop
echo " <h3>Multiplication using Arrays integrated with ForEach Loop</h3>";
    $multi = array(
        '5 * 1' => 5,
        '5 * 2' => 10,
        '5 * 3' => 15,
        '5 * 4' => 20,
        '5 * 5' => 25,
        '5 * 6' => 30,
        '5 * 7' => 35,
        '5 * 8' => 40,
        '5 * 9' => 45,
        '5 * 10' => 50,
    );
    
    foreach ($multi as $key => $value) {
        echo $key . "=" . $value . "<br>";
    }

// Using While Loop

echo "<h3>Multiplication Using While Loop</h3>";
$number = 5;
$a = 1;
while ($a <= 10) {
    echo "$number * $a = " . ($number * $a) . "<br>";
    $a++;
}

?>
