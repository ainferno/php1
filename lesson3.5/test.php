<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<form action="test.php" method="post">
	<input type="text" name="user_city">
	<input type="submit" value="SUBMIT">
</form>

<?php

$str = 'Масква';
$str2 = $_POST['user_city'];

//echo strtolower ($str);
$a1 = mb_substr($str, -1, 1, 'utf-8');
$a2 = mb_substr($str2, 0, 1, 'utf-8');
echo $a1, $a2;
var_dump($a1 == $a2);

?>

</body>
</html>