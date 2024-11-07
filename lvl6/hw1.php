<?php
$input = "1 2 3 4 5";
$numbers = array_map('intval', explode(' ', $input));

$pairs = [];

foreach ($numbers as $first) {
    foreach ($numbers as $second) {
        if ($first !== $second) {
            $pairs[] = [$first, $second];
        }
    }
}

foreach ($pairs as $pair) {
    echo $pair[0] . ' ' . $pair[1] . '<br>';
}