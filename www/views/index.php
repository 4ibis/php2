<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Главная\Новостная лента</title>
    </head>
    <body>

        <h1>Новостная лента</h1>

        <p> результат загрузки: </p>
        <p>
	    <a href="/index.php">на главную</a> &nbsp;&nbsp;&nbsp;
	    <a href="/article-form.php">добавить статью</a>
        </p>
	<p>
	    Вот список новостей:
	</p>
	<p>
	    <?php
	    sql_connect();
	    $res = sql_query('SELECT * FROM news ORDER BY id DESC');
	    while (false !== ($row = mysql_fetch_array($res))):
		?>
	    <a href="/views/single.php?id=<?php echo $row['id']; ?>">
		    <?php
		    echo $row['title'];
		    ?></a><br><?php
	    endwhile;
	    ?>
	</p>


    </body>
</html>