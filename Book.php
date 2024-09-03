<?php

include "conn.php";
session_start();
$_SESSION['user_id'];
//print_r($_SESSION);
?>
<?php
if (isset($_SESSION["user_id"])) {
    include "conn.php";
    $sql = "SELECT * FROM customers WHERE id = {$_SESSION["user_id"]}";
    $result = mysqli_query($conn, $sql);

    $user = $result->fetch_assoc();}else {
    header("Location: SignUp.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking section</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<style>
        body{
            background-image: url("https://images.pexels.com/photos/120049/pexels-photo-120049.jpeg?cs=srgb&dl=pexels-mike-b-120049.jpg&fm=jpg");
            height: 100svh;
            background-size: cover;
        }
    </style>
    <form action="BookedCars.php" method="post">
        <h2>Reserve your car here</h2><br>
        <div style="display: flex;gap:10px">
        <label for="name">Username</label>
        <input type="text" name="fname" id="" placeholder="Username" value="<?php echo $user['Username'];  ?>" readonly>
        <label for="name">Registration&NonBreakingSpace;number</label>
        <input type="text" name="reg" id="carState" value="<?php $reg ?>">
        </div>
        <div>
            <label for="name">Email</label>
            <input type="email" name="email" id="" readonly value="<?php echo $user['Email']; ?>">
        </div>
        <div style="display: flex;gap:10px">
        <label for="name">Time of Pick-up</label>
        <input type="datetime-local" name="date" id="">
        <label for="name">Date of return</label>
        <input type="datetime-local" name="rdate" id="">
        </div>
       
            <button type="submit" name="submit" onclick="changeStatus()" id="#button">Confirm</button>
            <button type="reset" name="reset">Cancel booking</button>
        <?php
    include "conn.php";
        
$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullURL, "signup=emptyInputs")== true) {
    echo "<p class='error'>You did not fill in all the fields</p>";
    exit();
}elseif(strpos($fullURL, "signup = Invalidemail")== true){
    echo "<p class='error'>You typed an invalid email</p>";
    exit();
}elseif(strpos($fullURL, "signup=invalidnames")== true){
    echo "<p class='error'>First name and last name must be valid names</p>";
    exit();
}elseif(strpos($fullURL, "signup=invaliduser")== true){
    echo "<p class='error'>You typed in an invalid username</p>";
    exit();
}elseif (strpos($fullURL, "invalidCarDetails")== true) {
    echo "<p class='error'>Invalid car details!</p>";
    exit();
}elseif (strpos($fullURL, "wrongemail")== true) {
    echo "<p class='error'>Invalid email!</p>";
    exit();
}elseif (strpos($fullURL, "invalidID")== true) {
    echo "<p class='error'>Invalid National ID</p>";
    exit();
}elseif (strpos($fullURL, "wrongDetails")== true) {
    echo "<p class='error'>Invalid User details</p>";
    exit();
}
elseif(strpos($fullURL, "signup=success") == true){
    echo "<p class='message'>You have successfully booked a car</p>";
    
    exit();
}
?>  
        

    </form>
    
    <a href="cancelbookings.php" ><button style="margin-left:20px;padding:20px;color:red;border-radius:10px;">Cancel bookings</button></a>
</body>
</html>
