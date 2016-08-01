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
	<title>Гостевая книга</title>
</head>
<body>
<h1> Гостевая книга </h1>
<div class="ramka">
	<form action="index.php" method="post">
		<h2>Оставьте ваш комментарий</h2>
		<input type="text" name="user" value="user name">
		<input type="text" name="text" value="text">
		<input type="submit" value="SUBMIT">
	</form>
</div>
<?php
foreach($Data as $a){
	echo "<p>" . $a . "<p>";
?>

</body>
</html>