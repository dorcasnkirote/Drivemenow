<?php 

if (!isset($_POST['submit'])) {
    
    die("You have not submitted the form");
}else {
    include("conn.php");
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $sql = sprintf("SELECT * FROM customers WHERE Email = '%s'",$_POST['email']);

    $result = mysqli_query($conn, $sql);

    $user = $result->fetch_assoc();
    if (!$user) {
        echo "No user";
        header("Location: SignUp.php?signup=createAccoutnt");
    }else {
        $query = password_verify($_POST['password'], $user["userPassword"]);
        if ($query) {
            session_start();
            //Prevent session attack
            session_regenerate_id();
            $_SESSION['user_id'] = $user["id"];
            header("Location: index.php");
            exit;
        }else {
           header("Location: Login.php?signup=wrongPassword");
            //echo "error";
        }
    }
    // header("Location: index.php");
    
    // if (mysqli_num_rows($result)==1) {
    //     echo"You have sucessfully logged in";
    //     header("Location: index.php");
    //     $_SESSION ['username'] = $email;
    //     session_start();
    // }else {
    //     "You have entered wrong credentials";
    //     header("Location:signin.php");
    // }
}
?>
