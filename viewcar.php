<?PHP
include "conn.php";
    if (!isset($_POST['submit'])) {
    die;
    }else {
        include "conn.php";
        $reg = mysqli_real_escape_string($conn,$_POST['reg']);
        if (empty($_POST['reg'])) {
            header("Location:read.php?signup=empty");
        }else {
            $sql = "SELECT * FROM fleet WHERE RegNo = '$reg'";
            
            $result = mysqli_query($conn, $sql);
            if($result->num_rows > 0){
                echo "<table border='1' style='margin:0px;'><tr><th>Car Id</th><th>carType</th><th>RegNo</th><th>Status</th><th>Fuel</th><th>Capacity</th><th>Gear</th><th>Price</th><th>Carphoto</th><th>TimeAdded</th></tr>";
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row["Id"]."</td><td>".$row["carType"]."</td><td>".$row["RegNo"]."</td><td>".$row["carStatus"]."</td><td>".$row["Fuel"]."</td><td>".$row["Capacity"]."</td><td>".$row["Gear"]."</td><td>".$row["Price"]."</td><td>"."<img src =".$row['Carphoto'].">."."</td><td>".$row["TimeAdded"]."&NonBreakingSpace;</td></tr>";
                    echo "</table>";
                }
            }else{
                header("Location: read.php?signup=invalidCar");
            }
        }
        
        
    }
?>
