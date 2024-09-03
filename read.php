<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="\CAR-Hire\ADMIN\styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
    include "headeradmin.php";
?> 
            <form action="viewcar.php" method="post">
                <h2><a href="homeAdmin.php"><span>CREATE CAR</span></a>&NonBreakingSpace;<a href="read.php"><span style="color: green;">VIEW FLEET</span></a>&NonBreakingSpace;<a href="update.php"><span>UPDATE FLEET</span></a>&NonBreakingSpace;<a href="delete.php"><span>DELETE CAR</span></a></h2>
                <br><br>
                <label for="name">Reg No</label><br>
                <input type="text" name="reg" id=""><br><br>
                <label for="time">Time viewed</label><br>
                <input type="datetime-local" name="time" id=""><br><br>
                <button name="submit" type="submit">Submit</button>
                <?php
include "conn.php";
        
$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullURL, "signup=empty")== true) {
    echo "<p class='error'>You did not fill in all the fields</p>";
    exit();
}if(strpos($fullURL, "signup=sucess")== true){
    echo "<p class='error'>You successfully viewed a vehicle</p>";
    exit();
}if(strpos($fullURL, "signup=invalidCar")== true){
    echo "<p class='error'>Invalid car details.</p>";
    exit();
}
?>
            </form>
            <form action="viewAll.php" method="post">
                <h2><span></a>&NonBreakingSpace;<a href="read.php"><span style="color: green;">VIEW FLEET</span></a>&NonBreakingSpace;<a href="update.php">&NonBreakingSpace;</span></a></h2>
                <br><br>
                
                <label for="time">Time viewed</label><br>
                <input type="datetime-local" name="" id=""><br><br>
                <button name="submit" type="submit">View all</button>
                <?php
        include "conn.php";
        
$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullURL, "signup=empty")== true) {
    echo "<p class='error'>You did not fill in all the fields</p>";
    exit();
}if(strpos($fullURL, "signup=sucess")== true){
    echo "<p class='error'>You successfully viewed a vehicle</p>";
    exit();
}if(strpos($fullURL, "signup=")== true){
    echo "<p class='error'>Invalid car details.</p>";
    exit();
}
?>
            </form>
            <form action="viewBookings.php" method="post">
                <h2><span></a>&NonBreakingSpace;<a href="read.php"><span style="color: green;">VIEW BOOKINGS</span></a></h2>
                <br>
                
                <label for="time">Time viewed</label><br>
                <input type="datetime-local" name="" id=""><br><br>
                <button name="submit" type="submit">View Bookings</button>
                <?php
        include "conn.php";
        
$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullURL, "signup=empty")== true) {
    echo "<p class='error'>You did not fill in all the fields</p>";
    exit();
}if(strpos($fullURL, "signup=sucess")== true){
    echo "<p class='error'>You successfully viewed a vehicle</p>";
    exit();
}if(strpos($fullURL, "signup=")== true){
    echo "<p class='error'>Invalid car details.</p>";
    exit();
}
?>
            </form>
</body>
</html>