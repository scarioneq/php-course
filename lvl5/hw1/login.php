<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

if ($login != 'admin') {
    echo 'Пользователь не найден';
    return;


} if ($login === 'admin' && $password === 'Pa$$w0rd') {
    $isAuthorized = true;
} else {
    $isAuthorized = false;
}

