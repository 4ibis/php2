<?php

/*
 * Обработчик формы входа
 */

require_once __DIR__ . '/functions.php';

if (empty($_POST['login']) or empty($_POST['password']))
{
    header('Location: /form.php');
    exit;
}

$login = $_POST['login'];
$password = $_POST['password'];

if (!chekAuthoriztion($login, $password))
{
    header('Location: /login-form.php');
    exit;
} else
{
    logIn($login);
    header('Location: /index.php');
    exit;
}