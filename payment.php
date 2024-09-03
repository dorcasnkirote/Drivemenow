<!DOCTYPE html>
<html>
  <head>
    <title>Pay Up</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <style>
      body
      {
        background-image: url();
        background-image: url("https://images.pexels.com/photos/120049/pexels-photo-120049.jpeg?cs=srgb&dl=pexels-mike-b-120049.jpg&fm=jpg");
        height: 100svh;
        background-size: cover;
        background-position: center;
      }
    </style>
 <?php
// Get the current URL
$url = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

// Print the URL
$url_parts = parse_url($url);

 // Prints the hostname (e.g. "example.com")
// echo "<br>";
// echo $url_parts['query']; 
$payment = $url_parts['query'];

?>
 <form method="post" action="stkpush.php">
      <h3>Complete your payment here:</h3><br>
      <label for="price">Amount in Ksh:</label><br>
      <input type="text" name="price" placeholder="Amount in Ksh" value="<?php echo $payment;  ?>"readonly><br><br>
      <label for="phone">Phone number (start 254): </label><br>
      <input type="text" name="phone_number" id="phone" placeholder="254XXXXXXXXX">

     
      <p>Once you submit your Payment details, a message will pop up on your <br> phone screen asking you to enter your pin to complete payment. <br> Thank you in advance for trusting our services!</p>
      <button type="submit" name="Pay"value="Submit">Submit</button>
      
    </form>



   

    
  </body>
</html>
