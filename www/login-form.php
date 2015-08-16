<?php
/* 
 * форма входа на сайт
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>страничка входа</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a href="/index.php">главная страница</a>
        <form action="/login.php" method="post">
            <input type="text" name="login"  placeholder="введи логин"required>
            <br>
            <input type="password" name="password" placeholder="введите пароль" required>
            <br>
            <input type="submit" value="ok">
        </form>
    </body>
</html>