<?php
function areAnagrams($word1, $word2) {

$word1 = strtolower(str_replace(' ', '', $word1));
    $word2 = strtolower(str_replace(' ', '', $word2));


    if (strlen($word1) !== strlen($word2)) {
        return 'No';
    }


    $sortedWord1 = str_split($word1);
    $sortedWord2 = str_split($word2);

    sort($sortedWord1);
    sort($sortedWord2);


    if ($sortedWord1 === $sortedWord2) {
        return 'Yes';
    } else {
        return 'No';
    }
}


$word1 = "night";
$word2 = "thing";
echo areAnagrams($word1, $word2);

$word1 = "save";
$word2 = "sale";
echo areAnagrams($word1, $word2);