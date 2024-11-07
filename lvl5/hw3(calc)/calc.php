<?php
if (empty($_GET)) {
    echo 'Ничего не передано!';
    exit;
}

if (!isset($_GET['operation'])) {
    echo 'Не передана операция';
    exit;
}

if (!isset($_GET['x1']) || !isset($_GET['x2'])) {
    echo 'Не переданы аргументы';
    exit;
}


$x1 = $_GET['x1'];
$x2 = $_GET['x2'];

if (!is_numeric($x1) || !is_numeric($x2)) {
    echo 'Заполните строки числами';
    exit;
}

$x1 = floatval($x1);
$x2 = floatval($x2);

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
    case '+':
        $result = $x1 + $x2;
        break;
    case '-':
        $result = $x1 - $x2;
        break;
    case '*':
        $result = $x1 * $x2;
        break;
    case '/':
        if ($x2 == 0) {
            echo 'Ошибка: деление на ноль невозможно';
            exit;
        }
        $result = $x1 / $x2;
        break;
    default:
        echo 'Операция не поддерживается';
        exit;
}

echo 'Результат вычислений:' . $expression . $result;
