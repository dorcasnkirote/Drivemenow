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
        <h1>drivemen<i class="fa-solid fa-location-dot"></i>w</h1>
        <div>
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="index.php #howToBook"><li>How to book</li></a>
                <a href="Fleet.php"><li>Fleet</li></a>
                <a href="index.php #contactUs"><li>Contact us</li></a>
                <a href="logout.php"><li>Logout</li></a>
            </ul>
        </div>
        <div>
        <i class="fa-regular fa-user" style="color: a;"></i><span id="span">&NonBreakingSpace; Fleet Section</span> 
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
        height: 100svh;
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
    #head div ul a
    {
        text-decoration: none;
        color: orange;
    }
    html{
        scroll-behavior: smooth;
    }
    i,#span{
        color: orange;
    }
   
    </style>
</body>
</html>