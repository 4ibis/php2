<?php

/*
 * ОБРАБОТЧИК ДОБАВЛЕНИЯ СТАТЬИ В БАЗЫ ДАННЫХ
 */

require_once __DIR__ . '/../functions.php';

if (!isUser())
{
    header('Location: /login-form.php');
    exit;
}
session_start();

$title = $_POST['title'];
$text = $_POST['text'];
$author = $_COOKIE['userId'];
$date = date("Y-m-d H-i-s");

sql_connect();
$res = sql_query_insert_article($title, $text, $author, $date);

if (true == $res)
{
    $_SESSION['add_article_report'] = 'Статья: " ' . $title . '" успешно добавлена';

} else
{
    $_SESSION['add_article_report'] = 'Ошибка! Статья не была добавлена :( ';
}

header('Location: /index.php');
exit;