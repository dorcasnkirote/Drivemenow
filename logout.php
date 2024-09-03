<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="stylelogout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div id="home"  style="display: flex;flex-direction:column;">
        <div id="navheader">
            <div id="logo">drivemen<i class="fa-solid fa-location-dot" style="color: aliceblue;"></i>w</div>
           
            <div id="account" style="justify-content:flex-end;">
                <i class="fa-regular fa-user" style="color: aliceblue;"></i>
                <a href="LogIn.php">Account</a></p>
            </div>
        </div>

        <div id="land">
            <div id="land1">
                <p id="welcometitle">You have logged out.Do you want to return to the index page?</p>
                <a href="SignUp.php"><button type="submit" id="submit">Click Here...</button></a>
            </div>
        </div>
    </div>
    <?php
   session_start();
   session_destroy();
  
    header("Loction: SignUp.php ");
    exit;
?>
</body>
</html>