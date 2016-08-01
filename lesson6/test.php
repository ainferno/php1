<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>test</title>
</head>
<body>
<?php

include "classes.php";
$a1 = new Article(1, 'News Title', 'На первой странице работы поместили таблицу ответов');
$a2 = new Article(2, 'Срочно в номер!', 'Маша попала в фонтан');

$news = new News(__DIR__ . "/news.txt");

$news->append($a1);
$news->append($a2);
var_dump($news);

$news->save(__DIR__ . '/news.txt');

?>
</body>
</html>