<html>
<head>
	<title>Nlenn</title>
</head>
<body>

<?php
function Table($a, $b, $c)
{
	$x = $b * $b - 4 * $a * $c;
	if($x < 0)
		return null;
	else
		return sqrt($x);
}
$a = 1;
$b = 4;
$c = 4;
echo ($a);
echo ("x^2 + ");
echo ($b);
echo ("x + ");
echo ($c);
echo "<br>";
$d = Table($a,$b,$c);
if($d == null)
	echo "No solution";
else
{
	echo ("x1 = ");
	echo((-1*$b-$d)/(2*$a));
	echo(", x2 = ");
	echo((-1*$b+$d)/(2*$a));
}
<body>
</html>