<?php
$inputArray = [4, 8, 4, 12, 16, 8, 16];
$uniqueArray = [];

for ($i = 0; $i < count($inputArray); $i++) {
    $isUnique = true;
    
    for ($j = 0; $j < count($uniqueArray); $j++) {
        if ($inputArray[$i] == $uniqueArray[$j]) {
            $isUnique = false;
            break;
        }
    }
    if ($isUnique) {
        $uniqueArray[] = $inputArray[$i];
    }
}
echo "Array after removing duplicates: [" . implode(", ", $uniqueArray) . "]";
<?
