<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Days of the week array">
	<meta name="keywords" content="PHP, arrays">
	<meta name="author" content="Yuki">
	<title>Days Array</title>
</head>
<body>
<h1>Days of the Week</h1>
<?php
	

	// Step 3 version (French):
	$days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

	echo "<ul>";
	foreach ($days as $day) {
		echo "<li>", $day, "</li>";
	}
	echo "</ul>";
?>
</body>
</html>