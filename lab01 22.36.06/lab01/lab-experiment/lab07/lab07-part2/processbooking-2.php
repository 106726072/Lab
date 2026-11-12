<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Booking confirmation">
	<meta name="keywords" content="MiddleEarth, Tours, Rohan">
	<meta name="author" content="Yuki">
	<title>Booking Confirmation</title>
</head>
<body>
<h1>Rohirrim Tour Booking Confirmation</h1>
<?php
	// Read a text field safely: returns "" if missing, escaped otherwise
	function field($name) {
		if (isset($_POST[$name])) {
			return htmlspecialchars(trim($_POST[$name]));
		}
		return "";
	}

	$firstname = field("firstname");
	$lastname  = field("lastname");
	$age       = field("age");
	$species   = field("species");
	$food      = field("food");
	$partysize = field("partysize");

	$speciesNames = array("M" => "Human", "D" => "Dwarf", "E" => "Elf", "H" => "Hobbit");
	if (isset($speciesNames[$species])) {
		$species = $speciesNames[$species];
	}

	$bookings = array();
	if (isset($_POST["accom"])) { $bookings[] = "Accommodation"; }
	if (isset($_POST["4day"]))  { $bookings[] = "Four-day tour"; }
	if (isset($_POST["10day"])) { $bookings[] = "Ten-day tour"; }

	echo "<p>";
	echo "Welcome $firstname $lastname !<br />";

	if (count($bookings) > 0) {
		echo "You are now booked on the ", implode(" and ", $bookings), "<br />";
	} else {
		echo "You have not booked anything<br />";
	}

	echo "Species: $species<br />";
	echo "Age: $age<br />";
	echo "Meal Preference: $food<br />";
	echo "Number of travellers: $partysize";
	echo "</p>";
?>
</body>
</html>