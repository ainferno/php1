<?php
include 'classes.php';

$view = new View();
$view->assign("Author", "Karelin");
$view->display(__DIR__ . "/template.php");

?>
