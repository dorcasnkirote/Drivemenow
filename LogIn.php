<?php
// session_start();
// $_SESSION['Name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="stylesignup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="home">
    <div style="display: flex;justify-content:space-between;">
        <div style="display: flex;flex-direction:row;">
        <div id="logo">drivemen<i class="fa-solid fa-location-dot"></i>w <span style="font-size: 20px;color:antiquewhite;margin-left:800px;color:coral;"><i class="fa-regular fa-user" style="color: antiquewhite;"></i>&NonBreakingSpace; Welcome back</span></div>
        </div>
           
        </div>
    <form action="signInBack.php" method="post">
        <h2>SIGN IN</h2>
        <div>
            <label for="">Email</label><br><br>
            <input type="email" name="email" id="email" placeholder="Email" value="<?= htmlspecialchars($_POST['email'] ?? "") ?>">
        </div>
        <div>
            <label for="">Password</label><br><br>
            <input type="password" name="password" id="" placeholder="Password" value="<?= htmlspecialchars($_POST['password'] ?? "")?>">
        </div>
        <div>
            <p>Don't have an account <a href="SignUp.php">Sign up here</a></p><br>
            <button type="submit" name="submit">Sign In</button>
        </div>
        <?php
        include "conn.php";
        
        $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (strpos($fullURL, "signup=wrongPassword")== true) {
        echo "<p class='error'>You typed a wrong email or password</p>";
        exit();
        }
        ?>    
    </form>
    </div>
</body>
</html>