<html>

<head>
<title>index</title>
</head>

<body>

<?php
$u1 = $_GET['u1'];
$u2 = $_GET['u2'];

$u3 = $_GET['u3'];

switch($u3)
{
	case "+":
		$res = $u1 . " + " . $u2 . " = " . ($u1+$u2);
		break;
	case "-":
		$res = $u1 . " - " . $u2 . " = " . ($u1-$u2);
		break;
	case "*":
		$res = $u1 . " * " . $u2 . " = " . ($u1*$u2);
		break;
	case "/":
		$res = $u1 . " / " . $u2 . " = " . ($u1/$u2);
		break;
}
?>

<form action="index.php" method="get">
	<input type="text" name="u1" value="<?php echo $u1?>">
	<select name="u3">
		<option value="+" <?php if($u3 == '+')echo "selected" ?>>+</option>
		<option value="-" <?php if($u3 == '-')echo "selected" ?>>-</option>
		<option value="*" <?php if($u3 == '*')echo "selected" ?>>*</option>
		<option value="/" <?php if($u3 == '/')echo "selected" ?>>/</option>
	</select>
	<input type="text" name="u2" value="<?php echo $_GET['u2']?>">
	<input type="submit" value="SUBMIT">
	=
	<?php echo $res; ?>
</form>


</body>
</html>