<?php
include "conn.php";
$query = "SELECT * FROM fleet";
$result = mysqli_query($conn, $query);

cars($result);
 function cars($results)
 {
   while ($data = mysqli_fetch_assoc($results)) {
     $car_image = $data['Carphoto'];
     $regNo = $data['RegNo'];
     echo $regNo;

     echo "
     <a href=Book.php?name=$regNo>
     <img src='car_image'>
     <p>$regNo</p>
     </a>
     ";
   }
 }
 
?>