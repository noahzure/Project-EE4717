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
    <title>Pizza and Co.</title>
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../css/content.css"/>
        <link rel="stylesheet" href="../css/menu.css"/>
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
        <img src="../asset/photo/menu.png" style="width:100%">
        </header>
        <div id="menu-content">
                <div id="menu-list-container">

                <?php
                                    $items=array();
                                    $itemsName=array();
                                    $price = array();
                                    $image = array();
                                    $id=array();
                                    $i=0;
                                    $k = 0;
                ?>
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

                <?php

<<<<<<< HEAD
<<<<<<< HEAD
                    $sql = "SELECT * FROM menu WHERE type='Maki'";
=======
                    $sql = "SELECT * FROM menu LIMIT 10";
>>>>>>> 71abc8435755c912ee03b598a9b1272f7fd70a07
=======
                    $sql = "SELECT * FROM menu";
>>>>>>> a9199ab62d24b9e89956e28f1a5f07b1f0de094e
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        
                        while($row = mysqli_fetch_assoc($result)) {
                                $id[$i]=$row['id'];
                                $itemsName[$i]=$row['name'];
                                $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
                                $price[$i] = $row['price'];
                                $image[$i]= $row['imgURL'];
                                $description[$i]=$row['description'];
                                $i=$i+1;
                        }
                    }
                    ?>
           
                    <?php
                        echo '<div style="padding-top: 50px;">';
                        echo '<h1 style="padding-bottom:20px">MENU</h1>';

                       $c = 0;
                       for ($i=0; $i<count($items); $i++)
                        {
                            if ($c == 0) {
                                echo '<div class="menu-item_row">';
                            }
                            echo
                            '
                            <div class="menu-item">
                            <div id="'.$items[$k].'container" onclick="';
                            echo "modalFunc('".$itemsName[$k]."',".$price[$k].",'".$image[$k]."',".$id[$k].",'".$description[$k]."')";
                            echo
                            '"><img src="'.$image[$k].'" style="width:80%"><div style="margin-top:20px"><b>'.$itemsName[$k].'<b></div>
                            </div> 
                            </div>
                            ';

                            if ($c==2) {
                                echo '</div>';
                                $c = 0;
                            }
                            else {
                                $c++;
                            }
                            $k++;
                        }
                        
                    ?>
<<<<<<< HEAD
                <!--</div>-->
                <?php

                    $sql = "SELECT * FROM menu WHERE type='Nigiri'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            if ($row['availability']>0){
                            $id[$i]=$row['id'];
                            $itemsName[$i]=$row['name'];
                            $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
                            $price[$i] = $row['price'];
                            $image[$i]= $row['imgURL'];
                            $description[$i]=$row['description'];
                            $i=$i+1;
                            }
                        }
                    }
                    ?>

                    <?php
                        echo '<div id="nigiri" style="padding-top: 20px;">';
                        //echo '<h1>Nigiri</h1>';

                    $c = 0;
                    for ($i=$k; $i<count($items); $i++)
                        {
                            if ($c == 0) {
                                echo '<div class="menu-item_row">';
                            }
                            echo
                            '
                            <div class="menu-item">
                            <div id="'.$items[$k].'container" onclick="';
                            echo "modalFunc('".$itemsName[$k]."',".$price[$k].",'".$image[$k]."',".$id[$k].",'".$description[$k]."')";
                            echo
                            '"><img src="'.$image[$k].'"><div>'.$itemsName[$k].'</div>
                            </div> 
                            </div>
                            ';

                            if ($c==2) {
                                echo '</div>';
                                $c = 0;
                            }
                            else {
                                $c++;
                            }
                            $k++;
                        }
                    ?>

                    <?php

                    $sql = "SELECT * FROM menu WHERE type='Sets'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            if ($row['availability']>0){
                            $id[$i]=$row['id'];
                            $itemsName[$i]=$row['name'];
                            $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
                            $price[$i] = $row['price'];
                            $image[$i]= $row['imgURL'];
                            $description[$i]=$row['description'];
                            $i=$i+1;
                            }
                        }
                    }
                    ?>

                    <?php
                        echo '<div id="sets" style="padding-top: 20px;">';
                        //echo '<h1>Sets</h1>';

                    $c = 0;
                    for ($i=$k; $i<count($items); $i++)
                        {
                            if ($c == 0) {
                                echo '<div class="menu-item_row">';
                            }
                            echo
                            '
                            <div class="menu-item">
                            <div id="'.$items[$k].'container" onclick="';
                            echo "modalFunc('".$itemsName[$k]."',".$price[$k].",'".$image[$k]."',".$id[$k].",'".$description[$k]."')";
                            echo
                            '"><img src="'.$image[$k].'"><div>'.$itemsName[$k].'</div>
                            </div> 
                            </div>
                            ';

                            if ($c==2) {
                                echo '</div>';
                                $c = 0;
                            }
                            else {
                                $c++;
                            }
                            $k++;
                        }
                    ?>                    

                    <?php

                    $sql = "SELECT * FROM menu WHERE type='Don'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            if ($row['availability']>0){
                            $id[$i]=$row['id'];
                            $itemsName[$i]=$row['name'];
                            $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
                            $price[$i] = $row['price'];
                            $image[$i]= $row['imgURL'];
                            $description[$i]=$row['description'];
                            $i=$i+1;
                            }
                        }
                    }
                    ?>

                    <?php
                        echo '<div id="don" style="padding-top: 20px;">';
                        //echo '<h1>Don</h1>';

                    $c = 0;
                    for ($i=$k; $i<count($items); $i++)
                        {
                            if ($c == 0) {
                                echo '<div class="menu-item_row">';
                            }
                            echo
                            '
                            <div class="menu-item">
                            <div id="'.$items[$k].'container" onclick="';
                            echo "modalFunc('".$itemsName[$k]."',".$price[$k].",'".$image[$k]."',".$id[$k].",'".$description[$k]."')";
                            echo
                            '"><img src="'.$image[$k].'"><div>'.$itemsName[$k].'</div>
                            </div> 
                            </div>
                            ';

                            if ($c==2) {
                                echo '</div>';
                                $c = 0;
                            }
                            else {
                                $c++;
                            }
                            $k++;
                        }
                    ?>

                    <?php

                    $sql = "SELECT * FROM menu WHERE type='Gunkan'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            if ($row['availability']>0){
                            $id[$i]=$row['id'];
                            $itemsName[$i]=$row['name'];
                            $items[$i] =  str_replace(' ', '', $itemsName[$i]); 
                            $price[$i] = $row['price'];
                            $image[$i]= $row['imgURL'];
                            $description[$i]=$row['description'];
                            $i=$i+1;
                            }
                        }
                    }
                    ?>

                    <?php
                        echo '<div id="gunkan" style="padding-top: 20px;">';
                        //echo '<h1>Gunkan</h1>';

                    $c = 0;
                    for ($i=$k; $i<count($items); $i++)
                        {
                            if ($c == 0) {
                                echo '<div class="menu-item_row">';
                            }
                            echo
                            '
                            <div class="menu-item">
                            <div id="'.$items[$k].'container" onclick="';
                            echo "modalFunc('".$itemsName[$k]."',".$price[$k].",'".$image[$k]."',".$id[$k].",'".$description[$k]."')";
                            echo
                            '"><img src="'.$image[$k].'"><div>'.$itemsName[$k].'</div>
                            </div> 
                            </div>
                            ';

                            if ($c==2) {
                                echo '</div>';
                                $c = 0;
                            }
                            else {
                                $c++;
                            }
                            $k++;
                        }
                    ?>


=======
>>>>>>> 71abc8435755c912ee03b598a9b1272f7fd70a07

                </div>
            </div>

            <div id="myModal" class="modal">
                <div class="modal-content">
<<<<<<< HEAD
                <form action="./php/add_to_cart.php" method="post">
<<<<<<< HEAD
                    <div id="modal-picture" class="modal-col1"><img src="assets/menu/dummy.jpg"></div>

                    <div id="modal-details" class="modal-col2">
                        <div id="modal-item-name"><h1>Item Name</h1></div>
                        <div id="modal-item-price"><h2>Item Price</h2></div>
                        <div id="modal-item-description"><h4>Description</h4></div>
                        
                        <hr>
                        <h4>Quantity: </h4><input type="number" class="input-number" name="quantity" value=1 id="quantity" onchange="checkQuantity()">
=======
=======
                <form action="../php/add_to_order.php" method="post">
>>>>>>> a9199ab62d24b9e89956e28f1a5f07b1f0de094e
                    <div id="modal-picture" class="modal-col1"><img src="assets/menu/dummy.jpg">
                    </div> 
                    <div id="modal-details" class="modal-col2">
                        <div id="modal-item-name" style="padding-top:10px"><h1>Item Name</h1></div>
                        <div id="modal-item-price" style="padding-top:10px"><h2>Item Price</h2></div>
                        <div id="modal-item-description" style="padding-top:10px; padding-bottom:10px"><h4>Description</h4></div>
                        
                        <hr>
                        <h4 style="padding-top:10px">Quantity: </h4><input type="number" class="input-number" name="quantity" value=1 id="quantity" onchange="checkQuantity()">
>>>>>>> 71abc8435755c912ee03b598a9b1272f7fd70a07
                        <input type="number" value=0 id="itemId" name="itemId"><br>
                        <input type="submit" id="submit" class="submit" value="ADD TO ORDER">   
                    </div>

                    <div id="modal-close" class="modal-col3"><span class="close">&times;</span></div>
                </form>    
                </div>
            </div>
<<<<<<< HEAD

    </div> 
=======
            <script type="text/javascript" src="../js/menu.js"></script>
        </div>  
    </div>
    </div>
>>>>>>> 71abc8435755c912ee03b598a9b1272f7fd70a07


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