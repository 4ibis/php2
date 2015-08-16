<?php
/**
 * главная страница со всеми новостями/заголовками(?),
 * отсортированными в по дате в обратном порядке
 * и со ссылкой на страницу новости
 **/

require_once __DIR__ . '/functions.php';
session_start();

if (!isUser())
{
    header('Location: /login-form.php');
    exit;
}
if (isset($_SESSION['add_article_report']))
{
    $add_article_report = $_SESSION['add_article_report'];
    unset($_SESSION['add_article_report']);
}

include __DIR__ . '/views/index.php';