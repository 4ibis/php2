<?php

/*
 * отображение одной статейки
 */

require_once __DIR__ . '/../functions.php';
session_start();

if (!isUser())
{
    header('Location: /login-form.php');
    exit;
}
(int)$id = $_GET['id'];

$query = "SELECT * FROM news WHERE id={$id}";

sql_connect();
$res = sql_query($query);

while (false !== ($row = mysql_fetch_array($res)))
{
    $title = $row['title'];
    $text = $row['text'];
    $author = $row['author'];
    $date = $row['date'];
}
