<?php 
                  //   include "conn.php";
                  //   $sql = "SELECT * FROM fleet ORDER BY Id DESC;";
                  //   $query = mysqli_query($conn, $sql);
                  //   $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                  //   while ($row = mysqli_fetch_assoc($query)) {

                  //     $query = sprintf('SELECT * FROM fleet WHERE RegNo = $row["RegNo"];');
                  //     $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                  //     while ($row = mysqli_fetch_assoc()) {
                       
                  //       echo ' 
                  //       <div class="car">
                  //       <a href="">
                  //       <div><img src="'.$row["Carphoto"].'"></div>
                  //       </a>
                  //       <h3 id="cartype">'.$row["carType"].'</h3>
                  //         <div style="display: flex;flex-wrap: wrap;width:450px;justify-content:space-between;gap: 15px;align-items:flex-start;">
                  //           <p>Capacity:'.$row["Capacity"].'</p>  
                  //           <p>Gear:'.$row["Gear"].'</p> 
                  //           <p>Fuel:'.$row["Fuel"].' km/litre</p>
                  //           <p>Horsepower:'.$row["Fuel"].'</p>
                  //           <p>'.$row["Fuel"].' NM of Torque</p>
                  //           <p style="color:red;">'.$row["RegNo"].'</p>
                  //           <p style="color:green" id="status">'.$row["Status"].'</p>
                  //           <p>'.$row["Price"].' Kshs Per day</p> 
                           
                  //           <a href="payment.php" id="reserve"><button>Reserve Car</button></a>
                            
                  //         </div>
                  //       </div>
                  //      ';
                  //   }
                  // }
                ?><?php

                include_once 'conn.php';
                
                ?>
                
                <style>
                
                    .car-details {
                        margin: 50px auto;
                        max-width: 800px;
                        padding: 20px;
                        background-color: #fff;
                        box-shadow: 0px 0px 20px rgba(0,0,0,0.3);
                        text-align: center;
                    }
                
                    .car-details h1 {
                        font-size: 36px;
                        margin-bottom: 20px;
                    }
                
                    .car-details img {
                        max-width: 100%;
                        height: auto;
                        margin-bottom: 20px;
                    }
                
                    .car-details p {
                        font-size: 18px;
                        margin-bottom: 10px;
                    }
                
                    .reserve {
                        display: inline-block;
                        padding: 10px 20px;
                        font-size: 18px;
                        background-color: #007bff;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        margin-top: 20px;
                        text-decoration: none;
                        transition: background-color 0.2s ease-in-out;
                    }
                
                    .reserve:hover {
                        background-color: #0056b3;
                    }
                
                </style>
                
                
                <?php
                // Get the car name from the URL
                if (isset($_GET['RegNo'])) {
                    $name = $_GET['RegNo'];
                } else {
                    // If no car name is provided, redirect to the homepage
                    header('Location: fleet.php');
                    exit();
                }
                
                // Fetch car details from the database
                $sql = "SELECT * FROM fleet WHERE RegNo='$RegNo'";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    // Display car details
                    while ($row = mysqli_fetch_assoc($result)) {
                       
                        echo '<p><strong>Category:</strong> ' . $row['Gear'] . '</p>';
                        echo '<p><strong>Capacity:</strong> ' . $row['Price'] . '</p>';
                        echo '<p><strong>Rate:</strong> ' . $row['RegNo'] . '/= per day</p>';
                       
                    }
                } else {
                    // If no car is found with the given name, display an error message
                    echo '<p>No car found with the name ' . $name . '.</p>';
                }
                
                mysqli_close($conn);
                include_once 'footer.php';
                
                ?>


                