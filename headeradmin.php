<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="head">
        <h1 id="logo">drivemen<i class="fa-solid fa-location-dot" style="color: orange;"></i>w</h1>
        <div>
            <ul>
                <a href="homeAdmin.php"><li>Home</li></a>
                <a href="Fleet.php"><li>Fleet</li></a>
                <a href="adminlogout.php"><li>Logout</li></a>
            </ul>
        </div>
        <div>
        <i class="fa-regular fa-user" style="color: orange;"></i><a href=""></a><span id="span">&NonBreakingSpace; Admin Dashboard</span>
        </div>
    </div>
    <style>
    #head
    {
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    body
    {
        background-image: url("https://media.istockphoto.com/id/1297977546/photo/speedometer-satisfaction-level.jpg?b=1&s=170667a&w=0&k=20&c=dmwHZa4i2aMBwzVu886_LQ8LlfvVRHsl63K6dmNwfOc=");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat; 
        background-attachment: fixed;
    }
    #head div ul li{
        list-style: none;
    }
    #head div ul
    {
        display: flex;
        gap: 50px;
        justify-content: space-between;
    }
    #head div ul a,#span
    {
        text-decoration: none;
        color: orange;
    }
    #logo
    {
        color: white;
    }
   
   
    </style>
</body>
</html>