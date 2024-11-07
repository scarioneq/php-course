<?php
$input = "100 95 9 2 42 11 81";
$numbers = explode(' ', $input);
usort($numbers, function($a, $b) {
    return (strcmp($b . $a, $a . $b));
});

$result = implode('', $numbers);

echo $result;