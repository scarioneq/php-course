<?php
$numbers = [1, 2, 3, 4, 5];
print_r (array_slice($numbers, 1, 3));

$numbers = [0, 2, 3, 1, 2];
$result = array_unique($numbers);
foreach ($result as $key => $value) {
    echo $value . ' ';
}