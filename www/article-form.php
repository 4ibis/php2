<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Главная\Новостная лента</title>
    </head>
    <body>

        <h1>Добавление новости</h1>
	<p>
	    <a href="/index.php">на главную</a>
        </p>
	
        <form action="/models/article-add.php" method="post">
            <input type="text" name="title"  placeholder="Введите заголовок статьи" required>
            <br>
            <input type="text" name="text" placeholder="введите текст статьи" required>
            <br>
            <input type="submit" value="опубликовать">
        </form>
    </body>
</html>