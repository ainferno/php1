<html>

<head>
<title>3_2</title>
</head>

<body>
<?php
$pics = include 'pics.php';
foreach($pics as $i => $a)
{
	echo '<p><a href="image.php?an='.$i.'"><img width="300px" src="'.$a.'" alt="ne poshlo'.$a.'"></a></p>';
}

?>
</body>
</html>