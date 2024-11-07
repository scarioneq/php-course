<?php
include __DIR__ . '/functions.php';

echo isEven(4) == 0? 'Число является четным' : 'Число является нечетным';

echo '<br>' . 'Наименьшее число: ';
getMin(151.4, 151.1, 200);