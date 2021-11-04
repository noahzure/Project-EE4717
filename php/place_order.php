<?php

    $servername = "localhost";
    $username = "f32ee";
    $password = "f32ee";
    $dbname = "f32ee";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 

    $fullName = $_POST['fullName'];
    $paymentMethod = $_POST["paymentMethod"];
    $email = $_POST["email"];
    $nameOnCard = $_POST["nameOnCard"];
    $phoneNumber = $_POST["phoneNumber"];
    $creditCardNumber = $_POST["creditCardNumber"];
    $address = $_POST["address"];
    $creditCardExpires = $_POST["creditCardExpires"];
    $cvv = $_POST["cvv"];
    $finalPrice = $_POST["finalPrice"];
    $orderId = $_POST["orderId"];
    $custId = $_POST["custId"];

    $sql = "INSERT INTO `transaction` (`custId`,`fullName`,`email`,`phoneNumber`,`address`,`finalPrice`) VALUES ('".$custId."','".$fullName."','".$email."','".$phoneNumber."','".$address."','".$finalPrice."')";
    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn)<=0){
        $success = 'false';
    }

    //TEST - case if payment unsuccessful
    else if($custId == 2)
        $success = 'false';

    else{
        //handle payment by third party 
        //assume success
        $sql = "update `Order` set totalAmount = $totalAmount, purchasedDate =now(), status = 1 where orderId = ".$orderId;
        mysqli_query($conn, $sql);
    
        if(mysqli_affected_rows($conn)>0){
            $success = 'true';

            //send email
            $to      = 'f32ee@localhost';
            $subject = 'Your Order is successful';
            $message = 'Your order is successfull, and your order will be shipped soon';
            // set content-type to send HTML email
            $headers = 'From: f32ee@localhost' . "\r\n" .
                'Reply-To: f32ee@localhost' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers,'-ff32ee@localhost');
        }
        else{
            $success = 'false';
        }
    }

    header("Location:../pages/checkout.php?success=".$success);
    
?>
