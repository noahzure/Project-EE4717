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
        <div style="text-align: center">
            <div class="checkout-page page">
                <div class="title-container">
                    <h1>Checkout</h1>
                </div>
                <div class="checkout-content content">
                    <div class="order-summary">
                        <h2>Order summary</h2>
                        <table class="order-summary-table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Unit Price</th>
                                    <th>Amount</th>
                                    <th>Subtotal Price</th>
                                </tr>   
                            </thead>
                            <tbody>
                                <tr>
                                <td class="product-col"> 
                                            Pizza
                                        </td>
                                        <td>2.00</td>
                                        <td>1</td>
                                        <td>2.00</td>
                                </tr>    
 
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="total-price">Order Total: <span>2.00</span></td>
                                </tr>   
                            </tfoot>
                        </table>
                    </div>
                    
                </div>

                <div class="checkout-content content">
                    <div class="customer-details">
                        <h2>Customer Details</h2>
                        <form method="POST" action="../php/placeOrder.php" id="place-order-form" onsubmit="return handleSubmit()">
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
                                            <input type="hidden" name="totalAmount" value="1.00"/>
                                            <input type="hidden" name="orderId" value="1.00"/>
                                            <input type="hidden" name="custId" value="1.00"/>
                                            <div>Total Payment: <span>$750</span></div>
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

    <script src="../js/validateForm.js"></script>
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