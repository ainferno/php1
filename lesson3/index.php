<html>
<head>
	<meta charset="utf-8">
	<title>Города</title>
</head>
<?php
function get_city($letter)
{
	
}
if(isset($_POST['user']]))
{
	$user_city = $_POST['user'];
}
else
{
	$user_city = null;
}

?>
<body>
	<form action="index.php" method="post">
	<input type="text" name="user">
	<input type="submit" value="SUBMIT">
	<?php echo $res; ?>
</form>

<p><?php echo $bot_city; ?></p>
</body>
</html>