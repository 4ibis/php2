<?php
require_once __DIR__ . '/../functions.php';

include_once __DIR__ . '/../models/article.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Новостная лента</title>
    </head>
    <body>
	<p>
	    <a href="/index.php">на главную</a> &nbsp;&nbsp;&nbsp;
	    <a href="/article-form.php">добавить статью</a>
        </p>

        <h1>Новость: <?php echo $title; ?></h1>

	<p>
	    <i>
		автор: <?php echo $author; ?><br>
		опубликовано: <?php echo $date; ?>
	    </i>
	</p>
	<p>
	    <?php echo $text; ?>
	</p>



    </body>
</html>


