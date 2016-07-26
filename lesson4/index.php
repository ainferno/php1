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

<?php 
function writef($file, $data)
{
	$res = fopen($file,'a');
	fwrite($res,$data);
	fclose($res);
}
function readf($file)
{
	$res = fopen($file,'r');
	$b = [];
	while( !feof($res))
	{
		$b[] = fgets($res);
	}
	fclose($res);
	return $b;
}
if(isset($_POST['text']) && $_POST['text'] != null)
{
	if(isset($_POST['user']) && $_POST['user'] != null)
		writef(__DIR__ . '/guest_book.txt', "\r\n".$_POST['user']." - ".$_POST['text']);
	else
		writef(__DIR__ . '/guest_book.txt', "\r\n UNKNOWN - ".$_POST['text']);
}
foreach(readf(__DIR__ . '/guest_book.txt') as $a)
{
	echo '<p>' . $a . '<p>';
}
?>
<div class="ramka">
	<form action="index.php" method="post">
		<h2>Оставьте ваш комментарий</h2>
		<input type="text" name="user" value="user name">
		<input type="text" name="text" value="text">
		<input type="submit" value="SUBMIT">
	</form>
</div>

</body>
</html>