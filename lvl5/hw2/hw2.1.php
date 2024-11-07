<?php
$numbersString = "1 2 3 4 3 6";
$numbersArray = explode(" ", $numbersString);
$number1 = max($numbersArray);
foreach ($numbersArray as $key => $value) {
    if ($value === $number1) {
        unset($numbersArray[$key]);
        $number2 = max($numbersArray);
        echo $number1 * $number2;
    }
}