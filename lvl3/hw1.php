<?php
$a = 3;
$b = 5;
$c = $a;
$a = $b;
$b = $c;
echo $a, $b;

$d = 4;
$e = 6;
$e = $e + $d;
$d = $e - $d;
$e = $e - $d;
echo $d, $e;
