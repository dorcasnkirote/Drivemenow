<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout </title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="stylelogout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div id="home"  style="display: flex;flex-direction:column;">
        <div id="navheader" style="display: flex;justify-content:space-between;">
            <div id="logo">drivemen<i class="fa-solid fa-location-dot" style="color: aliceblue;"></i>w</div>
           
            <div id="account">
                <i class="fa-regular fa-user" style="color: orange;"></i>
                <a href="signupAdmin.php">Account</a>&NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;<a href="LogIn.php">Login as an user</a>
            </p>
            </div>
        </div>

                <p id="welcometitle">You have logged out.Do you want to return to the index page?</p>
                <a href="signupAdmin.php"><button type="submit" id="submit" style="background-color: blue;border-radius: 10px;left:20px;">Click Here...</button></a>
</div>
    <?php
   session_start();
   session_destroy();
  
    header("Loction: signupAdmin.php ");
    exit;
?>
</body>
</html>