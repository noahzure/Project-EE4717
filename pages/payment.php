<?php session_start(); ?>

<?php
if (!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();
}
?>  



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping website</title>
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../css/payment.css"/>
</head>
<body>
    <!-- Nav Bar -->
    <nav>
        <div class="nav-content">
            <div class="logo">
                <a href="../pages/index.php">
                    <img src="../asset/photo/logo.png"/>
                </a>
            </div>
            <div class="right-content">
                <ul>
                <li><a href="menu.php"><b>MENU</b></a><li>
                    <li><a href="locations.php"><b>LOCATIONS</b></a><li>
                    <li><a href="contactus.php"><b>CONTACT US</b></a><li>
                    <li><a href="order.php"><img src="../asset/photo/button-order2.png"></a><li>
                </ul>
            </div>  
        </div>
    </nav>   
    <!-- Main Body -->
    <div class="container">
        <header>
        <img src="../asset/photo/payment.png" style="width:100%">
        </header>

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
        ?>

        <div style="text-align: center">
            <div class="checkout-page page">
                <div class="title-container">
                    <h1><b>CHECKOUT</b></h1>
                </div>
                <div class="checkout-content content">
                    <div class="order-summary">
                        <h2>Order summary</h2>
                        <table class="order-summary-table">
                            <thead>
                                <tr>
                                    <th>Food</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Subtotal Price</th>
                                </tr>   
                            </thead>
                            <tbody>

                            <?php
                                $allPrice=0;
                                for ($i=0; $i<count($_SESSION['cart']); $i++)
                                {
                                    
                                    if ($_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]>0)
                                    {   

                                        $sql = "SELECT * FROM menu where id=".array_keys($_SESSION['cart'])[$i];
                                        $result = mysqli_query($conn, $sql);
                                        $item=array();
                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) 
                                            {
                                                
                                                $rowId ='ItemWithId' .array_keys($_SESSION['cart'])[$i];
                                                $quantityId = 'quantity'.$rowId;
                                                $priceId ='price'.$rowId;
                                                $totalPriceId ='totalPrice'.$rowId;
                                                $itemNoId = 'itemNo'.$rowId;
                                                $deleteId ='delete'.$rowId;
                                                $saveId ='save'.$rowId;

                                                echo "<tr id='".$rowId."'>";


                                                echo "<td class='td-center'><img src=".$row['imgURL']." style='width:25%' ><input type='number' class='input-number' value=".array_keys($_SESSION['cart'])[$i]." id='itemNoId' name='itemNoId'";
                                                echo 'style="display:none"';
                                                echo" ></td>";

                                                echo "<td class='td-left'>" .$row['name']. "</td>";

                                                echo "<td id='".$priceId."'>" .$row['price']. "</td>";  

                                                echo "<td>" .$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]. "</td>";

                                                echo '</td>';

                                                echo'</form>';

                                                $totalPrice = $row['price']*$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]];

                                                echo "<td class='td-center' id='".$totalPriceId."'>".$totalPrice."</td>";

                                                echo "<input type='number' value=".array_keys($_SESSION['cart'])[$i]." id='itemNoId' name='itemNoId'";
                                                echo 'style="display:none"';
                                                echo" >";
                                                
                                                echo "</tr>";
                                                $allPrice = $allPrice +$totalPrice;
                                                $gstPrice = $allPrice *0.07;
                                                $dlvPrice = 7;
                                                $finalPrice = $allPrice + $gstPrice + $dlvPrice;
                                                

                                            }
                                        }


                                    }
                                    else
                                    {
                                        $_SESSION['cart'][array_keys($_SESSION['cart'])[$i]]=0;
                                    }
                

                                }
                            ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                <td colspan="5" class="total-price">Total Price: <span> $<?=$allPrice; ?></span></td>
                                </tr>
                                <tr>
                                <td colspan="5" class="total-price">GST (7%): <span> $<?=$gstPrice; ?></span></td>
                                </tr>
                                <tr>
                                <td colspan="5" class="total-price">Delivery: <span> $<?=$dlvPrice; ?></span></td>
                                </tr>   
                                <tr>
                                <td colspan="5" name="finalPrice" class="total-price">Final Total Price: <span> $<?=$finalPrice; ?></span></td>
                                </tr>   
                            </tfoot>
                        </table>
                    </div>
                    
                </div>

                <div class="checkout-content content">
                    <div class="customer-details">
                        <h2>Customer Details</h2>
                        <form method="POST" action="../php/place_order.php" id="place-order-form" onsubmit="return handleSubmit()">
                            <table class="customer-details-table">
                                <tr>
                                    <td class="label">Full Name</td>
                                    <td> <input type="text" placeholder="Your full name" name="fullName" value="<?php echo $customerDetails['fullName']; ?>" required/> </td>
                                    <td class="label">Payment Method</td>
                                    <td><input type="radio" checked name="paymentMethod"/> Credit Card</td>
                                </tr>
                                <tr>
                                    <td class="label">Email</td>
                                    <td> <input type="email" placeholder="Your email address" name="email" value="<?php echo $customerDetails['email']; ?>" required/> </td>
                                    <td class="label">Name on card</td>
                                    <td> <input type="text" placeholder="Your name on card" name="nameOnCard" required/> </td>
                                </tr>
                                <tr>
                                    <td class="label">Phone Number</td>
                                    <td> <input type="text" placeholder="Your phone number" name="phoneNumber" value="<?php echo $customerDetails['phoneNumber']; ?> " required/> </td>
                                    <td class="label">Credit card No.</td>
                                    <td> <input type="text" placeholder="Credit card number" name="creditCardNumber" required/> </td>
                                </tr>
                                <tr>
                                    <td class="label">Address</td>
                                    <td> <input type="text" placeholder="Your address" name="address" value="<?php echo $customerDetails['address']; ?> " required/> </td>
                                    <td class="label">Expires on</td>
                                    <td> <input type="text" placeholder="MM/YY" name="creditCardExpires" required/> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="label">CVV</td>
                                    <td> <input type="text" placeholder="CVV" name="cvv" required/> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2">
                                        <div class="total-payment">
                                            <input type="hidden" name="totalAmount" value="<?php echo $total;?>"/>
                                            <input type="hidden" name="orderId" value="<?php echo $orderId;?>"/>
                                            <input type="hidden" name="custId" value="<?php echo $uid;?>"/>
                                            <div>Total Payment: <span>$<?=$finalPrice; ?></span></div>
                                            <button class="place-order-btn">Place Order</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </form>

                        <!-- The Modal -->
                        <div id="success" class="modal">
                            <span></span>
                            <div class="modal-content">
                                <div class="modal-header-success">
                                    <h2>Payment Successful !!</h2>
                                </div>
                                <div class="modal-body">
                                    <img width="100" height="100" src="../images/successful.png" alt="">
                                </div>
                                <div class="modal-footer-success">
                                    <p>We have sent you the order confirmation to your email</p>
                                </div>
                                <button class="btn btn-outline-primary" style="margin:auto;display: block; margin-top: 12px;"> <a href="../pages/">Back to Homepage </a></button>
                            </div>
                        </div>
                        <div id="unsuccess" class="modal">
                            <span></span>
                            <div class="modal-content">
                                <div class="modal-header-unsuccess">
                                    <h2>Payment Unsuccessful !!</h2>
                                </div>
                                <div class="modal-body">
                                    <img width="100" height="100" src="../images/cross.png" alt="">
                                </div>
                                <div class="modal-footer-unsuccess">
                                    <p>There's something wrong with the payment, please try again!</p>
                                </div>
                                <button class="btn btn-outline-primary" style="margin:auto;display: block; margin-top: 12px;"> <a href="../pages/">Back to Homepage </a></button>
                            </div>
                        </div>
                                                
                    </div>
                </div>
            </div>

            <script>
                var check='<?php echo ($success); ?>'
                // alert(typeof(check))
           
                var modal1 = document.getElementById("success");
                var modal2 = document.getElementById("unsuccess");
                
                var span = document.getElementById("close");

                
                if (check === 'true')
                    modal1.style.display = "block";
                if (check === 'false')
                    modal2.style.display = "block";
                
            </script>
            
            <!-- Footer -->
    <footer class='footer'>
        <div class="footer-content">
            <div class="social-media">
                    <a href="#"><img src="https://1.bp.blogspot.com/-WSdqH3gMHDk/U-xndvvQYrI/AAAAAAAABwg/9OLHbIjiTF8/s1600/facebook%2Blogo%2Bpng%2Btransparent%2Bbackground.png" alt="facebook"/></a>
                    <a href="#"><img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-1024.png" alt="instagram"/></a>
                    <a href="#"><img src="https://cdn.freebiesupply.com/logos/large/2x/telegram-logo-png-transparent.png" alt="telegram"/></a>
            </div>
        </div>
        <div class="copyright">
            &copy; 2021 - Pizza and Co. All Rights reserved. Address.
        </div>
    </footer>
    </body>

    <script src="../js/paymentvalidation.js"></script>
    <script>
    function handleSubmit(){
        let form = document.querySelector('#place-order-form')

        try {
            let form = document.querySelector('#place-order-form')
            let fullName = form.querySelector('input[name="fullName"]').value
            let email = form.querySelector('input[name="email"]').value
            let phoneNumber = form.querySelector('input[name="phoneNumber"]').value
            let address = form.querySelector('input[name="address"]').value
            let nameOnCard = form.querySelector('input[name="nameOnCard"]').value
            let creditCardNumber = form.querySelector('input[name="creditCardNumber"]').value
            let creditCardExpiresOn = form.querySelector('input[name="creditCardExpires"]').value
            let cvv = form.querySelector('input[name="cvv"]').value

            let isValidated = validatePlaceOrder({
                fullName, email, phoneNumber, address, nameOnCard, creditCardNumber, creditCardExpiresOn, cvv
            })
            console.log('isValidated:' ,isValidated)
            return isValidated
        }
        catch(err) {
            console.log(err)
            return false
        }
        return false
    }
    </script> 	
 
</html>