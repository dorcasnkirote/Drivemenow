<?php
 if (isset($_POST['submit'])) {
    include("conn.php");
    $carType = mysqli_real_escape_string($conn,$_POST['carType']);
    $carReg = mysqli_real_escape_string($conn,$_POST['Carregno']);
    $carBrand = mysqli_real_escape_string($conn,$_POST['CarBrand']);
    $carStatus = mysqli_real_escape_string($conn,$_POST['carstatus']);
    $carFuel = mysqli_real_escape_string($conn,$_POST['carFuel']);
    $carCapacity = mysqli_real_escape_string($conn,$_POST['carCapacity']);
    $carGear = mysqli_real_escape_string($conn,$_POST['carGear']);
    $carPrice = mysqli_real_escape_string($conn,$_POST['carPrice']);
    $carDesc = mysqli_real_escape_string($conn,$_POST['carDescription']);
    $carPhoto = mysqli_real_escape_string($conn,$_POST['carPhoto']);
    $cartime = mysqli_real_escape_string($conn,$_POST['timeAdded']);

    if (empty($carType)|| empty($carReg) || empty($carStatus) || empty($carFuel) || empty($carCapacity) || empty($carGear) || empty($carPrice) || empty($carPhoto)) {
        header ("Location: homeAdmin.php?signup=emptyInputs");
    }else {
       
            $sql = "INSERT INTO fleet (carType, carBrand, RegNo, carStatus, Fuel, Capacity, Gear, Price, 	carDescription, Carphoto, TimeAdded) VALUES ('$carType','$carBrand','$carReg','$carStatus','$carFuel','$carCapacity','$carGear','$carPrice','$carDesc','$carPhoto','$cartime');";

            mysqli_query($conn, $sql);
            header("Location: homeAdmin.php?signup=success"); 
        }
}
else{
die("You did not submit the form");
}

?>
<?php
if (isset($_POST['submit'])) {
    // $newFileName = $_POST['name'];
    // if (empty($newFileName)) {
    //     //Incase no file name
    //     $newFileName = "gallery";
    // }else{
    //     //Replace spaces
    //     $newFileName = strtolower(str_replace("","-",$newFileName));
    // }
    // $imageTitle = $_POST['filetitle'];
    // $imageDesc = $_POST['filedesc'];

   // $image = $_FILES['file'];
    $carPhoto = mysqli_real_escape_string($conn,$_POST['carPhoto']);

    $FileName = $carPhoto['name'];
    $FileType =$carPhoto['type'];
    $FileTempName = $carPhoto['tmp_name'];
    $FileSize = $carPhoto['size'];
    $FileError = $carPhoto['error'];

    $fileExt = explode(".",$FileName);
    $FileActualExt = strtolower(end($fileExt));

    $allowed = array('jpeg','png','jpg');

    if (in_array($FileActualExt,$allowed)) {
        if ($FileError == 0) {
            if ($FileSize < 5000000) {
                $imageFullname = $newFileName . ".". uniqid("",true).".".$FileActualExt;
                $fileDestination = "/php001Classes/GALLERY/Images/".$imageFullname;

                include "conn.php";
                if (empty($imageTitle) || empty($imageDesc)) {
                  header("Location: homeAdmin.php?signup=incompletefields");
                  exit;
                }else{
                    $sql = "SELECT * FROM images;";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed";
                    }else{
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowcount = mysqli_num_rows($result);
                        $setImageorder = $rowcount+1;

                        $sql = "INSERT INTO fleet (carType, Car Brand, RegNo, Fuel, Capacity, Gear, Price, Description, Carphoto, TimeAdded) VALUES ('$carType','$carReg','$carFuel','$carCapacity','$carGear','$carPrice','$carPhoto','$cartime');";

                        mysqli_query($conn, $sql);

                        move_uploaded_file($FileTempName, $fileDestination);
                        header("Location: homeAdmin.php?upload=success");

                    }

                }
            }else {
                echo"File is too big";
            }
        }else{
            echo "You had an error";
        }
    }else {
        echo "File of this type not allowed";
    }
}
?>

