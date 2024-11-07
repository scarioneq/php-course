<?php
function findAplle ($fruits, $fruit)
{
    foreach ($fruits as $fruit) {
        if ($fruit === 'apple') {
            $findApple = true;
            break;
        }
    }
    echo $findApple ? "Фрукт найден" : "Фрукт не найден";
}
findAplle(['banana', 'apple', 'banana1', 'banana2'], 'apple');

function countNubmers($numbers, $number)
{
    $countNumber = 0;
    foreach ($numbers as $number_list) {
        if ($number_list == $number) {
            $countNumber += 1;
        }

    } echo $countNumber;
}
countNubmers([1, 24, 12, 50, 1, 20, 12, 43, 1, 41, 64, 1, 1, 1], 1);

$input = 6;
$i = 2;
$number1 = 0;
$number2 = 1;
echo $number1 . ' ', $number2 . ' ';

while ($i < $input) {
    $output = $number1 + $number2;
    echo $output . ' ';
    $number1 = $number2;
    $number2 = $output;
    $i += 1;
}