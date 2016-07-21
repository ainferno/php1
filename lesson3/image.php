<?php
$pics = include 'pics.php';
echo '<p><img src="'. $pics[$_GET['an']] .'" alt="ne poshlo'. $pics[$_GET['an']] .'"></a></p>';
?>