<?php
$numbersString = "1 2 3 4 5 3 2 1";
$numbersArray = explode(" ", $numbersString);

$countedValues = array_count_values($numbersArray);
$duplicates = array_filter($countedValues, function($count) {
    return $count > 1;
});

if (!empty($duplicates)) {
    echo "Дубликаты: " . implode(", ", array_keys($duplicates));
} else {
    echo "Дубликатов не найдено.";
}