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
        <link rel="stylesheet" href="../css/order.css"/>
        <script type="text/javascript" src="../js/update_order.js"></script>
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
        <div style="text-align: center; background-color: #f7f5f5;  margin-top:50px; padding-top:30px; padding-bottom:30px " class="shopping-cart-page">
                    <h1 style=" margin-bottom:30px">Order Summary</h1>

                    <table class="order-summary-table" style ="width:90%; margin: 20px auto">
                        <thead>
                            <tr>
                                <th>Food</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal Price</th>
                                <th>Action</th>
                            </tr>   
                        </thead>
                        <tbody>

                        <!-- Connect Database --> 
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
                        } ?>
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
                                            echo'<form action="../php/save_change.php" method="post">';

                                            echo "<tr id='".$rowId."' style='margin-top:50px' >";


                                            echo "<td class='td-center'><img src=".$row['imgURL']." style='width:25%; margin: 15px 0' ><input type='number' class='input-number' value=".array_keys($_SESSION['cart'])[$i]." id='itemNoId' name='itemNoId'";
                                            echo 'style="display:none"';
                                            echo" ></td>";

                                            echo "<td class='td-left'>" .$row['name']. "</td>";

                                            echo "<td id='".$priceId."'>" .$row['price']. "</td>";  

                                            echo '<td><input type="number" class="input-number" style="background-color: #F5F4F0;" name="quantityId" oninput="validity.valid||(value="");" value='.$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]].' id="quantityId" onchange="';
                                            echo "updateCart('".$rowId."','".$priceId."','".$totalPriceId."','".$saveId."')";
                                            echo'" style="width:50px; margin-bottom: 30px; margin-top: 30px;"  >';
                                            echo'<input type="submit" class="update" value="UPDATE" id="'.$saveId.'" style="display:none">';
                                            echo '</td>';

                                            echo'</form>';

                                            $totalPrice = $row['price']*$_SESSION['cart'][array_keys($_SESSION['cart'])[$i]];

                                            echo "<td class='td-center' id='".$totalPriceId."'>".$totalPrice."</td>";
                                            echo'<td class="td-center"><form action="../php/delete_order.php" method="post">';

                                            echo "<input type='number' value=".array_keys($_SESSION['cart'])[$i]." id='itemNoId' name='itemNoId'";
                                            echo 'style="display:none"';
                                            echo" >";

                                            echo'<input type="submit" class="delete-btn" value="Delete" id="'.$deleteId.'">
                                            </form></td>';
                                            
                                            echo "</tr>";
                                            $allPrice = $allPrice +$totalPrice;
                                            

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
                        
                        <!-- Checking order is empty or not -->
                        <?php
                        if ($allPrice==0)
                        {
                            $message = "Order is empty, Please select through";
                            echo "<script type='text/javascript'>alert('$message');
                            window.location.href='./menu.php'; 
                            </script>";
                             
                        }
                        ?>

                        <tfoot>
                            <?php 
                                if($result->num_rows > 0){
                                    echo '
                                    <tr>
                                        <td colspan="5" class="total-price">Total Price: <span> $'.$allPrice.'</span></td>
                                        <td>
                                            <form action="payment.php" method="POST">
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