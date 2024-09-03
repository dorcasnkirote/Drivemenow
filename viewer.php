<?php

// Retrieve the value of the "car" parameter
$car = $_GET['RegNo'];

// Use a switch statement to determine which car has been selected
switch ($car) {
    case 'mercedes-benz-g-wagon-suv':
        // Display the details for the Mercedes-Benz G Wagon SUV
        echo '<h1>Mercedes-Benz G Wagon SUV</h1>';
        echo '<p>Capacity: 12</p>';
        echo '<p>Gear: Both</p>';
        echo '<p>Fuel: 14 km/litre</p>';
        echo '<p>Horsepower: 14</p>';
        echo '<p>Torque: 14 NM</p>';
        echo '<p>License Plate: KBS 401L</p>';
        echo '<p>Availability: Available</p>';
        echo '<p>Rental Price: 1290 Kshs Per day</p>';
        echo '<a href="fleet.php">Back to fleet page</a>';
        break;
    case 'mercedes-benz-g-wagon-minivan':
        // Display the details for the Mercedes-Benz G Wagon Minivan
        // ...
        break;
    // Add cases for each car
    default:
        // Display an error message if an invalid car has been selected
        echo '<h1>Error: Invalid car selected</h1>';
        echo '<a href="fleet.php">Back to fleet page</a>';
        break;
}

?>
