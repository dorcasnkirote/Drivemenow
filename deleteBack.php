<?php
 if (isset($_POST['submit'])) {
    include("conn.php");
   $carReg = mysqli_real_escape_string($conn,$_POST['Carregno']);

    if (empty($carReg)) {
        header ("Location: delete.php?signup=emptyInputs");
    }else {
       
            $sql = "DELETE FROM fleet WHERE RegNo = '$carReg'";
            mysqli_query($conn, $sql);
            header("Location: delete.php?signup=success"); 
   }
}
else{
die("You did not submit the form");
}

?>