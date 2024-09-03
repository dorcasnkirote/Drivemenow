<?php
include("conn.php");
$sql = "SELECT * FROM bookcar";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Output data of each row
    echo "<h1>Bookings</h1>";
    echo "<table border='1' style='margin:0px;'><tr><th>Id</th><th>Username</th><th>Name</th><th>Email</th><th>IDNumber</th><th>	RegNo</th><th>PickTime</th><th>ReturnTime</th></tr>";
    while($row = $result->fetch_assoc()){
       // $photo = $row["Carphoto"];
       // $t = "<img src='.$row["Carphoto"].' height='240px' width ='300px'>";
       // echo'<img src="'.$row["Carphoto"].'">';
        echo "<tr><td>".$row["Id"]."</td><td>".$row["Username"]."</td><td>".$row["Name"]."</td><td>"
        .$row["Email"]."</td><td>".$row["IDNumber"]."</td><td>".$row["RegNo"]."
        </td><td>".$row["PickTime"]."</td><td>".$row["ReturnTime"]."</td></tr>";
    }
    echo "</table>";

}else {
    echo "No records found";
}
    
?>
