<?php
 include("conn.php");
 if (isset($_POST['submit'])) {
    include("conn.php");
    
$fname = $_POST['fname'];
$email = $_POST['email'];
$reg = $_POST['reg'];
$date = $_POST['date'];


$sql = sprintf("SELECT * FROM customers WHERE Email = '%s'",$_POST['email']);
$result = mysqli_query($conn, $sql);

$user = $result->fetch_assoc();
if (!$user) {
    header("Location:cancelbookings.php?signup=wrongemail");
}else {
    $sql = sprintf("SELECT * FROM customers WHERE Name = '%s'",$_POST['fname']);
    $result = mysqli_query($conn, $sql);

    
    $user = $result->fetch_assoc();
    if (!$user) {
      header("Location: cancelbookings.php?signup=wrongDetails");
    }


}

    if (empty($fname) || empty($reg) || empty($date)) {
        header ("Location: cancelbookings.php?signup=emptyInputs");
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header ("Location: cancelbookings.php.php?signup =Invalidemail"); 
    }elseif (!is_string($fname)) {
        header ("Location: cancelbookings.php?signup=invalidnames");
    }
    else {
        $regRequest = mysqli_query($conn, "SELECT RegNo FROM fleet WHERE RegNo = '$reg'");
        $count = mysqli_num_rows($regRequest);
        $status = mysqli_query($conn, "SELECT carStatus FROM fleet WHERE carStatus = 'Booked'");
        $checkStatus = mysqli_num_rows($status);

        if ($count == 0 || $checkStatus == 0 ) {
            header ("Location: cancelbookings.php?signup=invalidCarDetails");
        }else {
            $sql = new DateTime();
            echo $sql;
            $sql = "UPDATE fleet SET carStatus = 'Available' WHERE RegNo = '$reg';";
            mysqli_query($conn, $sql);
            $sql = "DELETE FROM bookcar WHERE RegNo = '$reg';";
            mysqli_query($conn, $sql);
            $sql = "DELETE FROM hired WHERE RegNo = '$reg';";
            mysqli_query($conn, $sql);
           
            header("Location: cancelbookings.php?signup=success"); 
        }
    }
}
else{
die("You did not submit the form");
}

?>