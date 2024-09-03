<?php
include "conn.php";
session_start();
$_SESSION['user_id'];
?>
<?php
if (isset($_SESSION["user_id"])) {
    include "conn.php";
    $sql = "SELECT * FROM customers WHERE id = {$_SESSION["user_id"]}";
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();
}else {
    header("Location: SignUp.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <form action="cancelBookedCars.php" method="post">
        <h2>Cancel your booking here</h2><br>
        <label for="name">Username</label><br>
        <input type="text" name="fname" id="" readonly value="<?php echo $user['Username'];  ?>"><br><br>
        <label for="name">Email</label><br>
        <input type="email" name="email" id="" value="<?php echo $user['Email']; ?>" readonly><br><br>
        <label for="name">Registration number</label>
        <input type="text" name="reg" id="carState" value="<?php $reg ?>"><br><br>
        <label for="name">Time of Cancel</label><br>
        <input type="datetime-local" name="date" id=""><br><br>
        

        <button type="submit" name="submit" id="#button">Confirm Booking Cancellation</button>
        <button type="reset" name="reset">Refresh</button>
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
    echo "<p class='mess'>You have successfully cancelled your booking</p>";
    
    exit();
}
?>  
    </form>
</body>
</html>