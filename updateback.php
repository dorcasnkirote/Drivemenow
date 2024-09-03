<?php

if (isset($_POST['submit'])) {
   include("conn.php");
   $carType = mysqli_real_escape_string($conn,$_POST['carType']);
   $carReg = mysqli_real_escape_string($conn,$_POST['Carregno']);
   $carBrand = mysqli_real_escape_string($conn,$_POST['CarBrand']);
   $carStatus = mysqli_real_escape_string($conn,$_POST['carstatus']);
   $carFuel = mysqli_real_escape_string($conn,$_POST['carFuel']);
   $carCapacity = mysqli_real_escape_string($conn,$_POST['carCapacity']);
   $carGear = mysqli_real_escape_string($conn,$_POST['carGear']);
   $carPrice = mysqli_real_escape_string($conn,$_POST['carPrice']);
   $carDesc = mysqli_real_escape_string($conn,$_POST['carDescription']);
   $carPhoto = mysqli_real_escape_string($conn,$_POST['carPhoto']);
   $cartime = mysqli_real_escape_string($conn,$_POST['timeAdded']);

   if (empty($carType) || empty($carReg) || empty($carStatus) || empty($carFuel) || empty($carCapacity) || empty($carGear) || empty($carPrice) || empty($carPhoto)) {
       header("Location: homeAdmin.php?signup=emptyInputs");
       exit();
   } else {
       $sql = "UPDATE fleet SET carType ='$carType', RegNo ='$carReg', carStatus ='$carStatus', Fuel ='$carFuel', Capacity ='$carCapacity', Gear = '$carGear', Price = '$carPrice' , carPhoto = '$carPhoto'  WHERE RegNo = '$carReg';";
       mysqli_query($conn, $sql);
       header("Location: update.php?signup=success");
       exit(); 
   }
}
else{
   die("You did not submit the form");
}
