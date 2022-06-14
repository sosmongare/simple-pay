<?php
    require "getAccesToken.php";

    if(isset($_POST["submit"])){
        $phone = $_POST["mobilenumber"];
        $amount = $_POST["amount"];

        $ch = curl_init('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest');

        $curl_post_data = array(
            //Fill in the request parameters with valid valuesHE
            "BusinessShortCode"=> 174379,
            "Password"=> "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjIwMTI1MTUwOTI0",
            "Timestamp"=> date('YmdHis'),
            "TransactionType"=> "CustomerPayBillOnline",
            "Amount"=> $amount,
            "PartyA"=> $phone,
            "PartyB"=> 174379,
            "PhoneNumber"=> $phone,
            "CallBackURL"=> "https://alphasolutions.co.ke/simplepay/callback.php",
            "AccountReference"=> "Alpha Systems",
            "TransactionDesc"=> "Payment for testing" 
        );

        $data_entry = json_encode($curl_post_data);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '. $access_token,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_entry);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        // echo $response;

        session_start();

        $_SESSION['flash_message'] = "Request sent to your mobile phone";
        header("Location: index.php");
    }
?>
