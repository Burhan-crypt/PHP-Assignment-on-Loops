<?php
$str = "hello world";
$vowels = ['a', 'e', 'i', 'o', 'u'];
$count = 0;

for ($a = 0; $a < strlen($str); $a++) {
    if ($str[$a] == 'a' OR $str[$a] == 'e' OR $str[$a] == 'i' OR $str[$a] == 'o' OR $str[$a] == 'u') {
        $count++; 
    }
}
echo "The number of vowels in $str are: " . $count;
?>
