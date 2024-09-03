<?php
 include("conn.php");
 if (isset($_POST['submit'])) {
    include("conn.php");
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    $confirm = mysqli_real_escape_string($conn,$_POST['Confirm']);

    if (empty($name)|| empty($email) || empty($password) || empty($confirm)) {
        header ("Location: signUpAdmin.php?signup=emptyInputs");
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header ("Location: signUpAdmin.php?signup =Invalidemail"); 
    }elseif ($password !== $confirm) {
        header ("Location: signUpAdmin.php?signup=passworddonotmatch");
    }elseif (strlen($password)<1) {
        header ("Location: signUpAdmin.php?signup=shortpassword");
    }else {
            $passwordhash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sql = "INSERT INTO admin (Username, Email, Password) VALUES ('$name','$email', '$passwordhash');";
            mysqli_query($conn, $sql);
            header("Location: signinAdmin.php?signup=success"); 
    }
}
else{
die("You did not submit the form");
}

?>