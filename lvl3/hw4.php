<?php
//Напишите функцию, которая будет принимать на вход 3 аргумента с типом float и возвращать минимальное значение.
//- Напишите функцию, которая принимает на вход два аргумента по ссылкам и умножает каждый из них на 2.
//- Напишите функцию, считающую факториал числа. Реализуйте с помощью рекурсии.
//- Напишите функцию, которая будет выводить на экран целые числа от 0 до переданного значения.
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
echo getMin(151.4, 151.1, 200);

function multi(&$a, &$b)
{
    $a = $a * 2;
    $b = $b * 2;
}
$a = 2;
$b = 2;
multi($a, $b);
echo  "<br>" . $a, $b;

function fact($a)
{
    if ($a <= 1) {
        return 1;
    }
    return $a * fact($a - 1);

}
echo "<br>" . fact(5);
function output($a)
{
    if ($a == 0) {
        return 0;
    }
    echo "<br>" . $a;
    return output($a - 1);
}
output(0);
echo "<br>" . 0;