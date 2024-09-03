<?php
include "conn.php";
?>
<?php
session_start();
$_SESSION['u_id'];
//print_r($_SESSION);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="back.css">
    <link rel="stylesheet" href="\CAR-Hire\ADMIN\styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<?php
include "headeradmin.php";
?>
<?php
if (isset($_SESSION["u_id"])) {
   // echo " <script>alert(You now are logged in)</script>";
    include "conn.php";
    $sql = sprintf("SELECT * FROM admin WHERE Username = '%s'",$_SESSION["u_id"]);

    $result = mysqli_query($conn, $sql);
    echo "You are logged in as an Admin &NonBreakingSpace;";
    echo $_SESSION['u_id'];

    $user = $result->fetch_assoc();
}else {
    header("Location: signUpAdmin.php");
}
?>
            <form action="homeAdminBack.php" method="post">
                <h2><a href="#"><span  style="color: green;">CREATE CAR</span></a>&NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;<a href="read.php"><span>VIEW FLEET</span></a>&NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;<a href="update.php"><span>UPDATE FLEET</span></a>&NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;<a href="delete.php"><span>DELETE CAR</span></a></h2>
                <br>
                <label for="name">Car Type</label><br>
                <input type="text" name="carType" id="" value="<?= htmlspecialchars($_POST['carType'] ?? "")?>"><br><br>
                <label for="name">Reg No</label><br>
                <input type="text" name="Carregno" id="" value="<?= htmlspecialchars($_POST['Carregno'] ?? "")?>"><br><br>
                <label for="name">Car Brand</label><br>
                <input type="text" name="CarBrand" id="" value="<?= htmlspecialchars($_POST['CarBrand'] ?? "")?>"><br><br>
                <label for="name">Status</label><br>
                <input type="text" name="carstatus" id="" value="<?= htmlspecialchars($_POST['carstatus'] ?? "")?>"><br><br>
                <label for="name">Fuel consumption(Per litre)</label><br>
                <input type="number" name="carFuel" id="" value="<?= htmlspecialchars($_POST['carFuel'] ?? "")?>"><br><br>
                <label for="name">Capacity</label><br>
                <input type="number" name="carCapacity" id="" value="<?= htmlspecialchars($_POST['carCapacity'] ?? "")?>"><br><br>
                <label for="name">Gear type</label><br>
                <input type="text" name="carGear" id="" value="<?= htmlspecialchars($_POST['carGear'] ?? "")?>"><br><br>
                <label for="price">Price(Per day)</label><br>
                <input type="number" name="carPrice" id="" value="<?= htmlspecialchars($_POST['carPrice'] ?? "")?>"><br><br>
                <label for="price">Description</label><br>
                <input type="text" name="carDescription" id="" value="<?= htmlspecialchars($_POST['carPrice'] ?? "")?>"><br><br>
                <label for="name">Car Photo</label><br>
                <input type="text" src="" alt="" name="carPhoto" accept="image/x-png,image/gif,image/jpeg" value="<?= htmlspecialchars($_POST['carPhoto'] ?? "")?>"><br><br>
                <label for="time">Time added</label><br>
                <input type="datetime-local" name="timeAdded" id="" value="<?= htmlspecialchars($_POST['timeAdded'] ?? "")?>"><br><br>
                <button name="submit" type="submit" onclick="uploadGUI()" id="button">Submit</button>

                <?php
        include "conn.php";
        
        $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (strpos($fullURL, "signup=emptyInputs")== true) {
        echo "<p class='error'>You did not fill in all the fields</p>";
        exit();
        }elseif(strpos($fullURL, "signup = Invalidemail")== true){
        echo "<p class='error'>You typed an invalid email</p>";
        exit();
        }elseif(strpos($fullURL, "signup=userexists")== true){
        echo "<p class='error'>Username already exists</p>";
        exit();
        }elseif(strpos($fullURL, "signup=invaliduser")== true){
        echo "<p class='error'>You typed in an invalid username</p>";
        exit();
        }elseif(strpos($fullURL, "signup=shortpassword")== true){
        echo "<p class='error'>Your password is too short.Password must contain atleast 8 characters</p>";
        exit();
        }elseif(strpos($fullURL, "signup=passworddonotmatch")== true){
        echo "<p class='error'>Password must match with confirmation password</p>";
        exit();
        }elseif(strpos($fullURL, "signup=success")== true){
        echo "<p class='mes'>You have successfully added a vehicle</p>";
        exit();
        }
    ?>    
            </form>
</body>
<script src="uploadGUI.js"></script>
</html>
