<?php

$servername = "localhost";
$userrname = "root";
$password = "";
$database = "drivemenow";


$conn = mysqli_connect('localhost','root','','drivemenow');
if($conn){
   // echo "Success";
}else{
    die("Failed");
}

?>