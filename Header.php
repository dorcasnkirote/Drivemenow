<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div id="home">
        <div id="navheader">
            <div id="logo">drivemen<i class="fa-solid fa-location-dot"></i>w</div>
            <div id="navbar">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#Cars-Fleet">About Us</a></li>
                    <li><a href="Fleet.php">Fleet</a></li>
                    <li><a href="#howToBook">How to book</a></li>
                    <li><a href="#contactUs">Contact Us</a></li>
                    <li><a href="logout.php">Log out</a></li>
                    <li><span><i class="fa-regular fa-user"></i></span><a href="LogIn.php">&NonBreakingSpace; Account</a></li>
                </ul>
            </div>
        </div>

        <div id="land">
            <div id="land1">
                <p id="landingHead">Do you want to hire a car?</p>
                <p id="landDescription">Welcome to Drivemenow..</p>
                <a href="#Cars-Fleet"><button type="submit" id="search">Hire your preferred car here at Drivemenow</button></a>
            </div>
        </div>
    </div>
    <style>
        *{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        #home
        {
        display: flex;
        flex-direction: column;
        background-image: url("https://images.pexels.com/photos/120049/pexels-photo-120049.jpeg?cs=srgb&dl=pexels-mike-b-120049.jpg&fm=jpg");
        height: 100svh;
        background-size: cover;
        background-position: center;
        }
        #navheader
        {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        #logo
        {
            color: white;
            font-size: 40px;
            margin-left: 20px;
        }
        i
        {
            color: orange;
        }
        #navbar ul
        {
            display: flex;
            flex-direction: row;
            gap: 50px;
        }
        #navbar ul li{
            list-style: none;
        }
        #navbar ul li a{
            text-decoration: none;
            font-size: 22px;
            color: orange;
         }
        #landingHead
        {
            margin-left: 20px;
            font-size: 40px;
            color:white;
        } 
        #landDescription
        {
            margin-left: 20px;
            color: orange;
            font-size: 40px;
        }
        #search
        {
            margin-left: 20px;
            font-size: 25px;
            padding: 20px;
            border-radius: 10px;
            left:20px;
            background-color: #0B2447;
            color:white;
            outline: none;
            border: none;
        }
        
        
    </style>
</body>
</html>