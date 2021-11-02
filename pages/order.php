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
        <link rel="stylesheet" href="../css/order.css"/>
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
        <img src="../asset/photo/order.png" style="width:100%">
        </header>
        <div style="text-align: center" class="shopping-cart-page page">
                    <h1>Order Summary</h1>

                    <table>
                        <thead>
                            <tr>
                                <th>Food</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal Price</th>
                                <th>Action</th>
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
                                        <td>
                                            <form action="../php/delFromCart.php"method="POST">
                                                <input type="hidden" value="'. $row['productId']. '" name="product_id" />
                                                <input type="hidden" value="'. $row['orderId']. '" name="order_id" />
                                                <input type="submit" class="delete-btn" value="Delete" />
                                            </form>
                                        </td>
                                    </tr>
                                
                            
                            
                        </tbody>
                        <tfoot>
                            <?php 
                                if($result->num_rows > 0){
                                    echo '
                                    <tr>
                                        <td colspan="5" class="total-price">Total Price: <span> $'.$total.'</span></td>
                                        <td>
                                            <form action="../pages/checkout.php" method="POST">
                                            <input type="hidden" value="<?php echo $total; ?>" name="total" />
                                            <input type="hidden" value="<?php echo $order_id; ?>" name="order_id" />
                                            <input type="submit" class="checkout-btn" value="Checkout" />
                                        </td>
                                    </tr> ';
                                }
                                else{
                                    echo '
                                    <tr>
                                        <td class="no-product" colspan="6">No Product added to cart</td>
                                    </tr>
                                    ';
                                }
                            ?>
                             
                        </tfoot>
						<tr>
								<td colspan="10">
									<a href="payment.php"><h1>PAYMENT</h1></a>
								</td>
						</tr>
                    </table>
		</div>
	</div>
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
</html>