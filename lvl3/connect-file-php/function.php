<?php

function isEven(int $x)
{
    return $x % 2;
}

function getMin(float $a, float $b, float $c)
{
    if ($a < $b && $a < $c) {
        echo $a;
    } elseif ($b < $a && $b < $c) {
        echo $b;
    } else {
        echo $c;
    }
}