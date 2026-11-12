<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Marks average">
	<meta name="keywords" content="PHP, arrays, if statement">
	<meta name="author" content="Yuki">
	<title>My First PHP</title>
</head>
<body>
<h1>Marks Average</h1>
<?php
	$marks = array(85, 85, 95);
	$marks[1] = 90;

	$ave = array_sum($marks) / count($marks);

	if ($ave >= 50) {
		$status = "PASSED";
	} else {
		$status = "FAILED";
	}

	echo "<p>The average is ", $ave, ".</p>";
	echo "<p>Status: ", $status, "</p>";
?>
</body>
</html>