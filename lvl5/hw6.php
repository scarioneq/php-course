<?php
$inputString = "1 2 3";

$numbers = explode(' ', $inputString);

$totalProduct = 1;
foreach ($numbers as $num) {
    $totalProduct *= $num;
}

$result = [];

foreach ($numbers as $num) {
    $result[] = $totalProduct / $num;
}

$outputString = implode(' ', $result);

echo $outputString;