<?php
// Show errors while testing (you can delete these 3 lines later)
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_OFF);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cars for Sale</title>
</head>
<body>
    <h1>Used Cars</h1>
<?php
require_once "settings.php";

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    echo "<p>Database connection failure: " . mysqli_connect_error() . "</p>";
} else {
    $query  = "SELECT * FROM cars";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "<p>Query error: " . mysqli_error($conn) . "</p>";
    } elseif (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Make</th><th>Model</th><th>Price</th><th>Year</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['car_id'] . "</td>";
            echo "<td>" . $row['make'] . "</td>";
            echo "<td>" . $row['model'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['yom'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>There are no cars to display.</p>";
    }

    mysqli_close($conn);
}
?>
</body>
</html>