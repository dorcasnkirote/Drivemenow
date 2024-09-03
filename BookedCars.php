<?php
 include("conn.php");
 if (isset($_POST['submit'])) {
    include("conn.php");
    
$fname = $_POST['fname'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$id = $_POST['id'];
$reg = $_POST['reg'];
$date = $_POST['date'];
$rdate = $_POST['rdate'];

// Create two DateTime objects representing the start and end dates
$start_date = new DateTime($_POST['date']);
$end_date = new DateTime($_POST['rdate']);

// Calculate the difference between the two dates
$diff = $end_date->diff($start_date);

// Calculate the total number of hours in the difference
$total_hours = $diff->days * 24 + $diff->h;
// $payment = $total_hours;
// Output the result


$sql = sprintf("SELECT * FROM customers WHERE Email = '%s'",$_POST['email']);
$result = mysqli_query($conn, $sql);

$user = $result->fetch_assoc();
if (!$user) {
    header("Location: Book.php?signup=wrongemail");
}else {
    $sql = sprintf("SELECT * FROM customers WHERE Name = '%s'",$_POST['fname']);
    $result = mysqli_query($conn, $sql);

    
    $user = $result->fetch_assoc();
    if (!$user) {
      header("Location: Book.php?signup=wrongDetails");
    }else {
        $username = $user['Name'];
        $useremail = $user['Email'];
        $userid = $user['IDNumber'];
        echo $user['IDNumber'];
        echo $user['Email'];
    }


}

    if (empty($fname) || empty($reg) || empty($date) || empty($rdate)) {
        header ("Location: Book.php?signup=emptyInputs");
    }
    else {
        $regRequest = mysqli_query($conn, "SELECT RegNo FROM fleet WHERE RegNo = '$reg'");
        $count = mysqli_num_rows($regRequest);
        $status = mysqli_query($conn, "SELECT carStatus FROM fleet WHERE carStatus = 'Available'");
        $checkStatus = mysqli_num_rows($status);
        $sta = "Booked";

        if ($count == 0 || $checkStatus == 0 ) {
            header ("Location: Book.php?signup=invalidCarDetails");
        }else {

//url
    $sql = sprintf("SELECT Price FROM fleet WHERE RegNo = '%s'", mysqli_real_escape_string($conn, $reg));
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        // echo $row['Price'];
        $price = $row['Price'];
        $payment = $price * $total_hours/24;
        }
        // $sql = sprintf("SELECT Price FROM fleet WHERE RegNo = '$reg'");
        $sql = "UPDATE fleet SET carStatus = 'Booked' WHERE RegNo = '$reg';";
        mysqli_query($conn, $sql);
        $sql = "INSERT INTO bookcar(Username,Name,Email, IDNumber, RegNo, PickTime , ReturnTime, hirePeriod) VALUES ('$fname','$username','$email','$userid','$reg','$date','$rdate','$total_hours')";
        mysqli_query($conn, $sql);
        $sql = "INSERT INTO hired(RegNo) VALUES ('$reg');";
        mysqli_query($conn, $sql);
       
        header("Location: payment.php?$payment"); 
    }
//

            
        }
    }
}
else{
die("You did not submit the form");
}

?>