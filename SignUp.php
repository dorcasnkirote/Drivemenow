<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="stylesignup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div id="page">

    <div style="display: flex;flex-direction:row;">
        <div id="logo">drivemen<i class="fa-solid fa-location-dot"></i>w<span style="font-size: 20px;color:antiquewhite;margin-left:800px;color:coral;"><i class="fa-regular fa-user" style="color: antiquewhite;"></i>&NonBreakingSpace; Create Acount</span></div>
    </div>
    <p id="welcometitle">Do you need to hire a car?</p>
    <p id="welcome">Welcome to drivemenow</p>
    <p id="motto">&quot; Your best car rental partner&quot;</p>
           
    <form action="signUpBack.php" method="post">
        <h2>SIGN UP</h2>
        <div style="display: flex;gap:10px;">
            <label for="Username">Username</label>
            <input type="text" name="name" id="uname" placeholder="Username" autocomplete="off" maxlength="15" value="<?= htmlspecialchars($_POST['name'] ?? "")?>">
            <label for="Useremail">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" autocomplete="off" value="<?= htmlspecialchars($_POST['email'] ?? "")?>">
        </div>
        <div style="display: flex;gap:10px;">
            <label for="ID">IDnumber</label>
            <input type="number" name="nationalid" id="" placeholder="National ID" autocomplete="off" maxlength="15" value="<?= htmlspecialchars($_POST['nationalid'] ?? "")?>">
            <label for="ID">Name</label>
            <input type="text" name="fullname" id="email" placeholder="Full Name" autocomplete="off" value="<?= htmlspecialchars($_POST['fullname'] ?? '')?>">
        </div>
        <div style="display: flex;gap:10px;">
            <label for="">Password&NonBreakingSpace;</label>
            <input type="password" name="password" id="" placeholder="Password" autocomplete="off" value="<?= htmlspecialchars($_POST['password'] ?? "")?>">
            <label for="password">Confirm&NonBreakingSpace;password</label>
            <input type="password" name="Confirm" id="" placeholder="Confirm password" autocomplete="off" value="<?= htmlspecialchars($_POST['Confirm'] ?? "")?>">
        </div>
        <br>
        <p style="text-align: center;">Already have an account <a href="LogIn.php">Sign in here</a></p><br>
        <div>
            <button type="submit" name="submit">Sign Up</button>
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
        }elseif(strpos($fullURL, "signup=userExists")== true){
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
        }elseif(strpos($fullURL, "signup=shortname")== true){
            echo "<p class='error'>Provide atleast two valid names as your name.</p>";
            exit();
        }elseif(strpos($fullURL, "signup=passworddonotmatch")== true){
            echo "<p class='error'>Password must match with confirmation password</p>";
            exit();
        }elseif(strpos($fullURL, "signup=invalidID")== true){
            echo "<p class='error'>National Id must be an 8-numeric entry.</p>";
            exit();
        }elseif(strpos($fullURL, "signup=success")== true){
            echo "<p class='mess'>You have signed up as an admin</p>";
            exit();
        }
        ?>
    </form>
</body>
</html>


