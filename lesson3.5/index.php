<html>
<head>
	<meta charset="utf-8">
	<title>Города</title>
</head>


<?php
function get_city($letter, $data)
{
	$letter = mb_strtolower($letter,'utf-8');
	foreach($data as $a)
	{
		//echo $a . " first letter = " . mb_strtolower(mb_substr($a, 0, 1, 'utf-8'), 'utf-8') . " our letter = " . $letter;
		//echo " equality? = " . (mb_strtolower(mb_substr($a, 0, 1, 'utf-8'), 'utf-8') == $letter);
		//echo "<br>";
		$city_letter = mb_strtolower(mb_substr($a, 0, 1, 'utf-8'), 'utf-8');
		
		if($city_letter == $letter)
			return $a;
	}
	//echo "POINT";
	return null;
}

$cities = include 'cities.php';

$user_city = $_POST['user_city'];
$last_char = mb_substr($user_city,-1, 1, 'utf-8');
?>


<body>
<form action="index.php" method="post">
	<input type="text" name="user_city">
	<input type="submit" value="SUBMIT">
</form>

<?php echo "<p>" . get_city($last_char, $cities) . "<p>"; ?>

</body>
</html>