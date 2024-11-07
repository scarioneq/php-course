<?php
$inputString = "1 6 4 3";
$numbers = array_map('intval', explode(' ', $inputString));
$maxDifference = 0;
$maxValue = $numbers[0];


for ($i = 1; $i < count($numbers); $i++) {
    if ($numbers[$i] < $maxValue) {
        $difference = $maxValue - $numbers[$i];
        if ($difference > $maxDifference) {
            $maxDifference = $difference;
        }
    } else {
        $maxValue = $numbers[$i];
    }
}