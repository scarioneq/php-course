<?php
$stringNum = '7 0 39 0 282 2 4 0 45';
$stringNum = explode(' ', $stringNum);
$countNull = 0;
foreach ($stringNum as $key => $num) {
    if ($num == 0) {
        unset($stringNum[$key]);
        $countNull ++;
    }
}
$i = 0;
while ($i < $countNull) {
    $stringNum[] = 0;
    $i++;
}
foreach ($stringNum as $num) {
    echo $num . ' ';
}