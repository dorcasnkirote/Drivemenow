<?php
session_start();
$_SESSION['user_id'];
//print_r($_SESSION);
?>
<?php
if (isset($_SESSION["user_id"])) {
   // echo " <script>alert(You now are logged in)</script>";
    include "conn.php";
    $sql = "SELECT * FROM customers WHERE id = {$_SESSION["user_id"]}";
    $result = mysqli_query($conn, $sql);

    $user = $result->fetch_assoc();
}else {
    header("Location: SignUp.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drivemenow</title>
    <link rel="stylesheet" href="styleindex.css">
    <link rel="stylesheet" href="styling.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php
    include "Header.php";
?>
<?php
  if (isset($user['Username'])) {
    //echo "Hello &NonBreakingSpace; ";
  $time = date("H");
  /* Set the $timezone variable to become the current timezone */
  $timezone = date("e");
  /* If the time is less than 1200 hours, show good morning */
  if ($time < "12") {
      echo "<h2>Good morning &NonBreakingSpace;";
  } else
  /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
  if ($time >= "12" && $time < "17") {
    echo "<h2>Good afternoon &NonBreakingSpace;";
  } else
  /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
  if ($time >= "17" && $time < "19") {
    echo "<h2>Good evening &NonBreakingSpace;";
  } else
  /* Finally, show good night if the time is greater than or equal to 1900 hours */
  if ($time >= "19") {
    echo "<h2>Good night &NonBreakingSpace;";
    echo "</h2>";
  }
  echo $user['fullName'];
  echo"</h2>";
  }
    ?>
    <p id="mainmessage">Drivemenow.Open on a 24-hour 7 basis.</p>
    <div id="Cars-Fleet"  style="display:flex;flex-direction:row;flex-wrap:wrap;">
       <h1>About Us</h1>
            <div style="display: flex; justify-content:space-between; gap:30px;">
                <div style="box-shadow: 15px 15px 2px #0B2447;width:fit-content;height:fit-content;"><img src="https://images.unsplash.com/photo-1680298255666-6071fc905870?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8MTAwcHglMjB3aWR0aCUyMGNhciUyMHBob3RvfGVufDB8fDJ8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt=""></div>
                <div>
                    <p>Welcome to Drivemenow.At Drivemenow we offer outstanding car rental services at affordable prices.Our fleet ranges from SUVS(Sports Utility Vehicles), Minivans, Hatchbacks, Convertibles, Station wargons, Sports cars, Pick-up trucks,Coupe, Sedans and Crossovers.</p>
                    <p>
                        <ul id="why">
                            <h2>Why Us</h2>
                            <li id="list1">No hidden Charges<span style="float:right;cursor:pointer;">&plus;</span></li>
                            <p id="p1">At drivemenow there are no extra charges once you have made your payment while you are booking you will instantly get your hired car within no time</p>
                            <li class="li2">Dedicated Customer Support<span style="float:right;cursor:pointer;">&plus;</span></li>
                            <p id="p2"> We command a vast demand of customers across the whole country which owes to as our welcoming and heartwarming staff who work on a 24 7 system to guarantee you the best services.</p>
                            <li class="li3">Free cancellation<span style="float:right;cursor:pointer;">&plus;</span></li>
                            <p id="p3" class="">At drivemenow you can cancel you booked car atleast 24 hours before you pick it and be guaranteed of money refund at no penalty costs.</p>
                            <li class="li4">All Inclusive Pricing<span style="float:right;cursor:pointer;">&plus;</span></li>
                            <p id="p4" class="">Our platform will guarantee you the best car hire services ensuring that you do not waste your time once you have booked your desined vehicles and paid for it.Within no time your vehicle will be up and rolling.</p></p>
                            <li class="li5">Lowest price Guaranteee<span style="float:right;cursor:pointer;">&plus;</span></li>
                            <p id="p5" class="">At Drivemenow we offer our vehicles at affordable prices.The prices are all set depending on the type of car, the use of the car as well as the comfortability that the car offers you.</p>
                        </ul>
                    </p>
                </div>
            </div>
    </div>
    <br>
    <div id="imgLogo" >
            <img src="data:image/png;base64,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" alt="" width="60px" height="60px">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP_ALCnSKcucKfljQwIeF7YimMul2X_5T1qg&usqp=CAU" alt="" width="80px">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv0u2td-qS6KucCTjZJdc_Tm5WjebnYQD6nw&usqp=CAU" alt="" width="100px">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnTDFlcL0Q76QYMYXJ-mO0qFeoHRvm1pVD0qLU2R_ubLwq2dgqKvXTeEQHqIQ3cw2u4zs&usqp=CAU" alt="" width="120px">
            <img src="data:image/jpeg;base64,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KnWzPksWNSPi6oZQStxqqHipBG8DhNQ9zrK/wLfO1ftzqwuxmAp1xiKFNhVDs4blHI1NfUdJbT8I7rWljgZD5RtlcLhKVKplashatoYF2cEFGYHnEkEaOjrnzqPUq5Cuq7CjiQL8SEDWHgNYHYB2TTs7yTD4tFp5ohdFfWAGZN+llvdCCdzHdGV5HhsPSNDBJakxJKMS4OoANfUTcEDhAyrYbbSlgaVSli6buGq8oGTSTvRVIIYj4oPHpMtLeVbB/Bo4nxWmP8yStbyf5YxJNCxPQtSoq+ChrDwE8e51ln4J/nan2oGWYnGHGZiKmHUqa2Kp6V4kAFFF7di3PVv6p+gZB5RsrgsMdWXUQr2trLM7AHiFZySvhaTkBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQP/Z" alt="" width="80px">
    </div>
    <div id="Cars-Fleet">
        <h1>Our Fleet</h1>
        <div id="wrapper" style="display: flex;justify-content:space-between;">
            <div>
                <div><img src="https://images.unsplash.com/photo-1562911791-c7a97b729ec5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3BvcnRzJTIwY2FyfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" width="400px" height="280px"></div>
                <div style="display: flex;flex-wrap: wrap;width:250px;justify-content:space-between;gap: 10px;">
                    <p>Capacity: 5</p>  
                    <p>Gear:Manual</p> 
                    <p>Fuel:13 litre/km</p>
                    <p>KBF 180H</p>
                    <p style="color:green;" id="status">Available</p>
                    <p>4500 Kshs Per day</p> 
                </div>
            </div>
            <div>
                <div><img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fHNwb3J0cyUyMGNhcnxlbnwwfDB8MHx8&auto=format&fit=crop&w=600&q=60" alt="" width="400px" height="280px"></div>
                <div style="display: flex;flex-wrap: wrap;width:250px;justify-content:space-between;gap: 10px;">
                    <p>Capacity: 5</p>  
                    <p>Gear:Manual</p> 
                    <p>Fuel:13 litre/km</p>
                    <p>KBP 580H</p>
                    <p style="color:green;" id="status">Available</p>
                    <p>3500 Kshs Per day</p> 
                </div>
            </div>
        </div>
        <a href="Fleet.php" id="linkSee"  style="align-self: center;"><p><button type="submit" id="submit">See more</button></p></a>
    </div>
   
    <div id="howToBook">
        <h1>How to Book</h1>
        <div id="wrapper">
            <div>
                <i class="fa-solid fa-right-to-bracket"></i>
                <p>Sign up into driveMenow</p>
            </div>
            <div>
                <i class="fa-solid fa-house"></i>
                <p>Visit our home page</p>
            </div>
            <div>
                <i class="fa-solid fa-car"></i>
                <p>Select your preferred car</p>
            </div>
            <div>
                <i class="fa-regular fa-hand-pointer"></i>
                <p>Click on your preferred car</p>
            </div>
            <div>
                <i class="fa-regular fa-copy"></i>
                <p>Copy car number plate.</p>
            </div>
            <div>
                <i class="fa-solid fa-location-arrow"></i>
                <p>Navigate to reserve Car.</p>
            </div>
            <div>
                <i class="fa-regular fa-pen-to-square"></i>
                <p>Fill in the required details</p>
            </div>
            <div>
                <i class="fa-solid fa-money-check-dollar"></i>
                <p>Perform the payments</p>
            </div>
        </div>
    </div>
    
    <div id="faqSection">
        <h1>Frequently Asked Questions</h1>
        <p>
            <ul id="faq">
                <li id="l1">How can I find the cheapest car rental deal?<span style="color: white;float:right;cursor:pointer;">&plus;</span></li>
                <p id="a1" style="font-size: 15px;">At drivemenow we offer car hire services at affordable prices.All our prices are affordable and friendly while still ensuring you the best services.</p>
                <li class="l2">How can I make payment for my car rental?<span style="color: white;float:right;cursor:pointer;">&plus;</span></li>
                <p id="a2" style="font-size: 15px;">Drivemenow aalows you to make online payments via an Safaricom M-Pesa platform.</p>
                <li class="l3">How old should I be before renting a car at Drivemenow?<span style="color: white;float:right;cursor:pointer;">&plus;</span></li>
                <p id="a3" class="" style="font-size: 15px;">At drivemenow you must be above 18 years old for you to hire a car.To ensure this our customers have to produce their driving licese and National Id to assertain their competency.</p>
                <li class="l4">What are the benefits of booking a car at Drivemenow?<span style="color: white;float:right;cursor:pointer;">&plus;</span></li>
                <p id="a4" class="" style="font-size: 15px;">Our platform will guarantee you the best car hire services ensuring that you do not waste your time once you have booked your desined vehicles and paid for it.Within no time your vehicle will be up and rolling.</p>
                <li class="l5">What services does Drivemenow car rental platform offer to their customers?<span style="color: white;float:right;cursor:pointer;">&plus;</span></li>
                <p id="a5" class="" style="font-size: 15px;">At Drivemenow we offer services  that range from Collision Damage Waiver (CDW), Theft protection, Airport /location fee, local taxes and unlimited millage.</p>
            </ul>
        </p>
    </div>

    <?php
    include "footer.php";
    ?>
    </body>
    <script>
    document.querySelector("#list1").addEventListener("click", ()=>{
      //  document.querySelector("#p1").style.display = 'inline';
        document.querySelector("#p1").classList.toggle('active');
    });
    document.querySelector(".li2").addEventListener("click", ()=>{
      //  document.querySelector("#p1").style.display = 'inline';
        document.querySelector("#p2").classList.toggle('active');
    });
    document.querySelector(".li3").addEventListener("click", ()=>{
      //  document.querySelector("#p1").style.display = 'inline';
        document.querySelector("#p3").classList.toggle('active');
    });
    document.querySelector(".li4").addEventListener("click", ()=>{
      //  document.querySelector("#p1").style.display = 'inline';
        document.querySelector("#p4").classList.toggle('active');
    });
    document.querySelector(".li5").addEventListener("click", ()=>{
      //  document.querySelector("#p1").style.display = 'inline';
        document.querySelector("#p5").classList.toggle('active');
    });

    //Frequently asked questions

    document.querySelector("#l1").addEventListener("click", ()=>{
      //  document.querySelector("#p1").style.display = 'inline';
        document.querySelector("#a1").classList.toggle('active');
    });
    document.querySelector(".l2").addEventListener("click", ()=>{
      //  document.querySelector("#p1").style.display = 'inline';
        document.querySelector("#a2").classList.toggle('active');
    });
    document.querySelector(".l3").addEventListener("click", ()=>{
      //  document.querySelector("#p1").style.display = 'inline';
        document.querySelector("#a3").classList.toggle('active');
    });
    document.querySelector(".l4").addEventListener("click", ()=>{
      //  document.querySelector("#p1").style.display = 'inline';
        document.querySelector("#a4").classList.toggle('active');
    });
    document.querySelector(".l5").addEventListener("click", ()=>{
      //  document.querySelector("#p1").style.display = 'inline';
        document.querySelector("#a5").classList.toggle('active');
    });
</script>
</html>