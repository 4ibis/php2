<?php

//	    Функции авториции и куков		//

function logIn($login) // функция авторизации пользователя(установка куки)
{
    setcookie('userId', $login, time() + 86400);
}

function logOut()
{
    setcookie('userId', '', time() - 886400);
}

function chekAuthoriztion($login, $password) // функция проверки логина и пароля
{
    $users = ['user1' => 'pass1'];
    return isset($users[$login]) && $password == $users[$login];
}

function isUser()   // проверка 
{
    return isset($_COOKIE['userId']);
}

function getUserLogin() // получение логина из куки
{
    return $_COOKIE['userId'];
}


//	    функции для работы с sql	    //

function sql_connect()
{
    mysql_connect('localhost', 'root', '');
    mysql_select_db('articles');
}

function sql_query($query)
{
    $res = mysql_query($query);
    return $res;
}

function sql_fetch($res){
    while (false !== ($row = mysql_fetch_array($res)))
    {
        echo $row['title'];
    }
}

function sql_query_insert_article($title, $text, $author, $date = '', $tags = ''){
    $resource = sql_query("INSERT INTO news(`title`, `text`, `author`, `date`, `tags`) VALUES ('$title', '$text', '$author', '$date', '$tags')");
    return $res;
}



// ТЕСТИРОВАНИЕ ФУНКЦИЙ!!! //

//    sql_connect();
//
//    $query_all_articles_desc = 'SELECT title FROM news ORDER BY id DESC';
//
//
//
//    var_dump($row);

               


    
    
//while (false !== ($row = mysql_fetch_array($sql_reqest1)))
//    {
//        echo ' > ' . $row['name'] . '<br>';
//    }
    