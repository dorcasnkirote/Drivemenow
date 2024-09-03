<?php
include "conn.php";
//include "FleetBa.php";
//include "Header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR-Hire/Fleet</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="styleFleet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

   <?php
    include "headerfleet.php"
   ?>
    <form action ="" method="get" style="background-color:transparent;width:90%;padding:0;">
        <div style="display:flex;flex-direction:row; justify-content: flex-end;align-items:centre;justify-items:center;">
            <input type="text" name="search" placeholder="Search car" style="border-radius: 20px;padding:3px;border:black 2px solid;" id="search">&NonBreakingSpace;&NonBreakingSpace;
            <i class="fa-solid fa-magnifying-glass-location fa-2xl" style="align-self: center;"></i>
        </div>
    </form>
       
    <div id="bookFleet" style="display: flex;flex-wrap:wrap;flex-direction:row;justify-content:space-between;">
    <?php 
                    include "conn.php";
                    $sql = "SELECT * FROM fleet ORDER BY Id DESC;";
                    $query = mysqli_query($conn, $sql);
                    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                    while ($row = mysqli_fetch_assoc($query)) {
                    echo '<div class="car">';   
                        echo '<div><img src="'.$row["Carphoto"].'"></div>';
                        echo '<h2>'.$row["carType"].'</h2>';
                        echo '<h3>'.$row["carBrand"].'</h3>';
                        echo '<p>Capacity:'.$row["Capacity"].'&NonBreakingSpace; &NonBreakingSpace;&NonBreakingSpace;Gear:'.$row["Gear"].'</p>';
                        echo '<p style="color:green;font-weight:bold;">Status:'.$row["carStatus"].'&NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;<span style="color:black;">Fuel: '.$row["Fuel"].'km/litre</span></p>';
                        echo '<p style="color:geen;font-weight:bold;">Rental Price:  Ksh'.$row["Price"].'&NonBreakingSpace;&NonBreakingSpace;&NonBreakingSpace;<span style="color:red;">'.$row["RegNo"].'</span>';
                        echo "<br>";
                        echo '<a href="Book.php" id="reserve"><button style="color:red;">Reserve Car</button></a>';
                    echo '</div>';
                   
                    }
                ?>
    </div>
    
</body>
<script>
    document.querySelector('#search').addEventListener("input",filterList);
    function filterList() {
        const searchInput = document.querySelector('#search');
        const filter = searchInput.value.toLowerCase();
        const listItems = document.querySelectorAll('.car');

        listItems.forEach(item => {
            let text = item.textContent;
            if (text.toLowerCase().includes(filter.toLowerCase())) {
                item.style.display = '';
            }else{
                item.style.display = 'none';
            }
        });
        
    }
</script>

</html>  


