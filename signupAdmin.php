<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<div style="display: flex;justify-content:space-between;">
            <div id="logo">drivemen<i class="fa-solid fa-location-dot"></i>w</div>
            <div id="account">
                <i class="fa-regular fa-user"></i>&NonBreakingSpace;
                <a href="signinAdmin.php">Account</a></p>
            </div>
</div>
        <h1 id="h1">Admin Dashboard</h1>
    <form action="signupbackAdmin.php" method="post">
        <h2>Admin Sign Up</h2>
        <div style="display: flex;flex-direction:row;gap:10px;">
            <label for="name">Username</label><br><br>
            <input type="text" name="name" placeholder="Username" autocomplete="off">
            <label for="email">Email</label><br><br>
            <input type="email" name="email" placeholder="Email" autocomplete="off">
        </div>
        
        <div style="display: flex;flex-direction:row;gap:10px;">
            <label for="">Password</label><br><br>
            <input type="password" name="password" placeholder="Password" autocomplete="off">
            <label for="password">Confirm password</label><br><br>
            <input type="password" name="Confirm" placeholder="Confirm password" autocomplete="off">
        </div>
        <div>
            <p style="align-self:center;">Already have an account <a href="signinAdmin.php">Sign in here</a></p><br>
            <button type="submit" name="submit" style="width: 100%;">Sign Up</button>
        </div>
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
    echo "<p class='mess'>You have signed up as an admin</p>";
    exit();
}
    ?>    
    </form>
</body>
</html>