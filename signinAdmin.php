<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin signin</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <div style="display: flex;justify-content:space-between;">
            <div id="logo">drivemen<i class="fa-solid fa-location-dot"></i>w</div>

            <div id="account">
                <i class="fa-regular fa-user"></i>&NonBreakingSpace;
                <a href="#">Account</a></p>
            </div>
        </div>
    <form action="signinbackAdmin.php" method="post">
        <h2>Admin Dashboard</h2>
        <div>
            <label for="">Username</label><br><br>
            <input type="text" name="username" id="" placeholder="Username" value="<?= htmlspecialchars($_POST['username'] ?? "")?>">
        </div>
        <div>
            <label for="">Email</label><br><br>
            <input type="email" name="email" id="email" placeholder="Email" value="<?= htmlspecialchars($_POST['email'] ?? "")?>">
        </div>
        <div>
            <label for="">Password</label><br><br>
            <input type="password" name="password" id="" placeholder="Password" >
        </div>
        <div>
            <p>Don't have an account <a href="signupAdmin.php">Sign up here</a></p><br>
            <button type="submit" name="submit">Sign In</button>
        </div>
        <?php
include "conn.php";
        
$fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullURL, "signup=wrongPassword")== true) {
    echo "<p class='error'>You typed a wrong email or password</p>";
    exit();
}if (strpos($fullURL, "signup=createAccoutnt")== true) {
    echo "<p class='error'>You do not have an account.</p>";
    exit();
}
        ?>
    </form>
    
</body>
</html>