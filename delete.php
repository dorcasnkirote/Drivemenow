<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="\CAR-Hire\ADMIN\styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
    include "headeradmin.php";
?>       

            <form action="deleteBack.php" method="post">
                <h2><a href="homeAdmin.php"><span>CREATE CAR</span></a>&NonBreakingSpace;<a href="read.php"><span>VIEW FLEET</span></a>&NonBreakingSpace;<a href="update.php"><span>UPDATE FLEET</span></a>&NonBreakingSpace;<a href="delete.php"><span style="color: green;">DELETE CAR</span></a></h2>
                <br><br>
                <label for="name">Reg No</label><br>
                <input type="text" name="Carregno" id=""><br>
                <label for="time">Time deleted</label><br>
                <input type="datetime-local" name="date" id=""><br><br>
                <button name="submit" type="submit">Submit</button>
                <?php
    include "conn.php";
        
    $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullURL, "signup=emptyInputs")== true) {
    echo "<p class='error'>You did not fill in all the fields</p>";
    exit();
    }elseif(strpos($fullURL, "signup=invalidcar")== true){
    echo "<p class='error'>You typed in an invalid car details</p>";
    exit();
    }elseif(strpos($fullURL, "signup=success")== true){
    echo "<p class='mes'>You have successfully deleted vehicle</p>";
    exit();
    }
    ?>    
            </form>
            
</body>
</html>