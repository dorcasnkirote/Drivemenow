<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <form action="" method="post">
        <h2>Complete your payments here.</h2>
        <?php
        include "conn.php";
       // require "Book.php";

        ?>
        <label for="name">Reg No</label>
        <input type="text">
        <br><br>
        <button type="submit">Confirm Payment</button>
        <?php
    include "conn.php";
        
    $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullURL, "signup=success") == true){
        echo "<p class='message'>You have successfully booked a car</p>";
    
    exit();
    }

    

    // Set your Daraja API credentials
    $consumer_key = 'PanlJxbpILk8fKzkILDsGzUTaZ1GKxSZ';
    $consumer_secret = 'A2zvGIg9emIkbnUM';
    $shortcode = '174379';
    $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
    
    // Set the phone number you want to send the STK Push to
    $phone_number = '254758725032';
    
    // Set the amount you want to charge
    $amount = 10;
    
    // Set the transaction description
    $transaction_desc = 'Payment for goods or services';
    
    // Generate the timestamp and password
    $timestamp = date('YmdHis');
    $password = base64_encode($shortcode.$passkey.$timestamp);
    
    // Set the endpoint URL
    $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    
    // Set the request body
    $request_body = array(
        'BusinessShortCode' => $shortcode,
        'Password' => $password,
        'Timestamp' => $timestamp,
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => $amount,
        'PartyA' => $phone_number,
        'PartyB' => $shortcode,
        'PhoneNumber' => $phone_number,
        'CallBackURL' => 'YOUR_CALLBACK_URL',
        'AccountReference' => 'CompanyXLTD',
        'TransactionDesc' => $transaction_desc
    );
    
    // Encode the request body as JSON
    $json_request_body = json_encode($request_body);
    
    // Set the cURL options
    $curl_options = array(
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => array('Content-Type:application/json', 'Authorization:Bearer ' . generate_access_token()),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $json_request_body
    );
    
    // Initialize cURL
    $curl = curl_init();
    
    // Set the cURL options
    curl_setopt_array($curl, $curl_options);
    
    // Execute the cURL request
    $response = curl_exec($curl);
    
    // Close the cURL session
    curl_close($curl);
    
    // Print the response
    echo $response;
    
    // Function to generate the access token
    function generate_access_token() {
        global $consumer_key, $consumer_secret;
    
        // Set the endpoint URL
        $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
    
        // Set the cURL options
        $curl_options = array(
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => array('Content-Type:application/json', 'Authorization:Basic ' . base64_encode($consumer_key . ':' . $consumer_secret)),
            CURLOPT_RETURNTRANSFER => true
        );
    
        // Initialize cURL
        $curl = curl_init();
    
        // Set the cURL options
        curl_setopt_array($curl, $curl_options);
    
        // Execute the cURL request
        $response = curl_exec($curl);
    
        // Decode the JSON response
        $decoded_response = json_decode($response, true);
    
        // Close the cURL session
        curl_close($curl);
    
        // Return the access token
        return $decoded_response['access_token'];
    }

    ?>