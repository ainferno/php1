<html>
<head>
	<style>
		.ramka
		{
			border: 2px solid red;
			width: 200px;
			
		}
		.ramka input
		{
			margin: 5px;
		}
		.ramka h2
		{
			text-align: center;
		}
	</style>
	<meta charset="utf-8">
	<title>News</title>
</head>
<body>
<h1>Новости</h1>
<div class="ramka">
	<form action="news.php" method="post">
		<h2>Добавить новость</h2>
		<input type="text" name="title" value="title">
		<input type="text" name="data" value="text">
		<input type="submit" value="SUBMIT">
	</form>
</div>
<?php
include "classes.php";
$news1= new News(__DIR__ . "/news.txt");

if(isset($_POST['data']) && $_POST['data'] != null){
	if(isset($_POST['title']) && $_POST['title'] != null)
		$news1->append(new Article($news1->getLast(),$_POST['title'],$_POST['data']));
	else
		$news1->append(new Article($news1->getLast(),"UNTITLED",$_POST['data']));
	$news1->save(__DIR__ . "/news.txt");
}


foreach($news1->getNews() as $article){
	echo $article->getName()+1;
	echo ' <a href="./article.php?id=' . $article->getName() . '">' . $article->getTitle() . '</a><br>';
}
?>
</body>
</html>