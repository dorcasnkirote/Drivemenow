<?php
 include("conn.php");
 if (isset($_POST['submit'])) {
    include("conn.php");
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $nationalid = mysqli_real_escape_string($conn,$_POST['nationalid']);
    $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
    $confirm = mysqli_real_escape_string($conn,$_POST['Confirm']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if (empty($name)|| empty($email) || empty($password) || empty($confirm) || empty($nationalid) || empty($fullname)) {
        header ("Location: SignUp.php?signup=emptyInputs");
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header ("Location: SignUp.php?signup =Invalidemail"); 
    }elseif ($password !== $confirm) {
        header ("Location: SignUp.php?signup=passworddonotmatch");
    }elseif (strlen($password)<8) {
        header ("Location: SignUp.php?signup=shortpassword");
    }elseif(str_word_count($fullname)<2){
        header ("Location: SignUp.php?signup=shortname");
    }elseif (!is_numeric($nationalid) || strlen($nationalid)!=8) {
        header ("Location: SignUp.php?signup=invalidID");
    }elseif (!is_numeric($nationalid) || strlen($nationalid)!=8) {
        header ("Location: SignUp.php?signup=invalidID");
    }
    else {
        $sql = sprintf("SELECT * FROM customers WHERE Email = '%s'",$_POST['email']);
        $result = mysqli_query($conn, $sql);
        if (!$result) {
           // $passwordhash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            // $sql = "INSERT INTO customers (Username,NationalID,fullName,Email,userPassword) VALUES ('$name','$nationalid','$fullname','$email','$passwordhash');";
            // mysqli_query($conn, $sql);
            header("Location: Signup.php?signup=Userexists"); 
        }else {
            //header ("Location: SignUp.php?signup=userExists");
            $passwordhash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sql = "INSERT INTO customers (Username,NationalID,fullName,Email,userPassword) VALUES ('$name','$nationalid','$fullname','$email','$passwordhash');";
            mysqli_query($conn, $sql);
            header("Location: LogIn.php?signup=success"); 
            exit();
        }
           
    }
}
else{
die("You did not submit the form");
}

?>