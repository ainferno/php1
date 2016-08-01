<html>
<?php
include "classes.php";
$a = $_GET['id'];
$news = new News(__DIR__ . "/news.txt");
$news_a = $news->getNews();
$b = $news_a[$a];
?>
<head>
	<meta charset="utf-8">
	<title><?php echo $b->getTitle(); ?></title>
</head>
<body>
<h1><?php echo $b->getTitle(); ?></h1>
<?php echo $b->getData(); ?>
<?php
//echo $a;
//var_dump($news_a);
?>
</body>
</html>