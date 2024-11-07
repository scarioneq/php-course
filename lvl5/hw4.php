<?php
function mostFrequentNumber($inputString) {
    $numbers = explode(' ', $inputString);
    $frequency = [];

    foreach ($numbers as $number) {
        if (isset($frequency[$number])) {
            $frequency[$number]++;
        } else {
            $frequency[$number] = 1;
        }
    }
    var_dump($frequency);

    $mostFrequent = null;
    $maxCount = 0;

    foreach ($frequency as $number => $count) {
        if ($count > $maxCount) {
            $maxCount = $count;
            $mostFrequent = $number;
        }
    }

    return $mostFrequent;
}


$inputString = "1 2 3 2 4 3 2 1";
$result = mostFrequentNumber($inputString);
echo "Наиболее часто встречающееся число: " . $result;