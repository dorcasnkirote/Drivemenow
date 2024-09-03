<?php 

if (!isset($_POST['submit'])) {
    
    die("You did not submitted the form");
}else {
    include("conn.php");
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);

    $sql = sprintf("SELECT * FROM admin WHERE Email = '%s'",$_POST['email']);

    $result = mysqli_query($conn, $sql);

    $user = $result->fetch_assoc();
    if (!$user) {
        header("Location: signupAdmin.php?signup=createAccoutnt");
    }else {
        $query = password_verify($_POST['password'], $user["Password"]);
        if ($query) {
            session_start();
            //Prevent session attack
            session_regenerate_id();
            $_SESSION['u_id'] = $user["Username"];
            header("Location: homeAdmin.php");
            exit;
        }else {
           header("Location: signinAdmin.php?signup=wrongPassword");
        }
    }
}
?>