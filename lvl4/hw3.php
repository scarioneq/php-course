<?php
$a = 345;

while ($a <= 356) {
    $even = $a % 2;
    if ($even == 0) {
        $b[] = $a;
    }
    $a += 1;

}
foreach ($b as $v) {
    echo $v . '<br>';
}