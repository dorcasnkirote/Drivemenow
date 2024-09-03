<?php
// Connect to the database
include "conn.php";

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the car ID from the URL parameter
include "conn.php";
                    $sql = "SELECT * FROM fleet ORDER BY Id DESC;";
                    $query = mysqli_query($conn, $sql);
                    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
$car_id = $result['RegNo'];

// Fetch car data from the database

$sql = sprintf("SELECT * FROM fleet WHERE 	RegNo = $car_id");
$ret = mysqli_query($conn, $sql);
$car = mysqli_fetch_assoc($ret);

// Close database connection
mysqli_close($conn);
?>

<!-- HTML form to display car data -->
<form>
  <label for="make">Make:</label>
  <input type="text" id="make" name="make" value="<?php echo $car['make']; ?>"><br>

  <label for="model">Model:</label>
  <input type="text" id="model" name="model" value="<?php echo $car['model']; ?>"><br>

  <label for="year">Year:</label>
  <input type="text" id="year" name="year" value="<?php echo $car['year']; ?>"><br>
</form>
