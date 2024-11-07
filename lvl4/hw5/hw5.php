<?php
$numbers = [1, 3, 2];
natcasesort($numbers);
foreach ($numbers as $number) {
    echo $number . ':';
}