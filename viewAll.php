<?php
include("conn.php");
$sql = "SELECT * FROM fleet";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Output data of each row
    echo "<h1>Drivemenow Fleet</h1>";
    echo "<table border='1' style='margin:0px;'><tr><th>Car Id</th><th>carType</th><th>RegNo</th><th>Status</th><th>Fuel</th><th>Capacity</th><th>Gear</th><th>Price</th><th>Carphoto</th><th>TimeAdded</th></tr>";
    while($row = $result->fetch_assoc()){
        $photo = $row["Carphoto"];
       // $t = "<img src='.$row["Carphoto"].' height='240px' width ='300px'>";
       // echo'<img src="'.$row["Carphoto"].'">';
        echo "<tr><td>".$row["Id"]."</td><td>".$row["carType"]."</td><td>".$row["RegNo"]."</td><td>"
        .$row["carStatus"]."</td><td>".$row["Fuel"]."</td><td>".$row["Capacity"]."
        </td><td>".$row["Gear"]."</td><td>".$row["Price"]."</td><td>"."<img src =".$row['Carphoto'].">."."</td><td>".$row["TimeAdded"]."&NonBreakingSpace;</td></tr>";
    }
    echo "</table>";

}else {
    echo "No records found";
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\CAR-Hire\ADMIN\styleAdmin.css">
</head>
<body>
  
</body>
</html>


