<?php session_start(); ?>
<!DOCTYPE html>

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

            $name='';
            $email='';
            $postalCode='';
            $phone='';
            $address='';

?>
<?php

if (isset($_SESSION['member']))
{

    $sql = "SELECT * FROM customers WHERE id = ".$_SESSION['member'];
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        
        while($row = mysqli_fetch_assoc($result)) {
            $name=$row['name'];
            $email=$row['email'];
            $postalCode=$row['postalCode'];
            $phone=$row['phone'];
            $address=$row['address'];
        }
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping website</title>
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../css/contactus.css"/>
        <script defer src="../js/ContactUsValidator.js"></script>    
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
        <img src="../asset/photo/contactus.png" style="width:100%">
        </header>
        <div style="text-align: center">
		<h1>Contact Us</h1>	
        <form action="../php/sendContact.php" method="post" id="contact-us">

            <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="ENTER NAME" <?php echo 'value="'.$name.'"';                                
                                 if (isset($_SESSION['member']))
                                    {
                                        echo ' onfocus="this.blur();"';
                                    }
                                ?>>
                <span class="error" id="error-name"></span><br>
            
            <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="ENTER EMAIL" <?php echo 'value="'.$email.'"';                                
                                 if (isset($_SESSION['member']))
                                    {
                                        echo ' onfocus="this.blur();"';
                                    }
                                ?>>
                <span class="error" id="error-email"></span><br>

            <label for="subject">Subject</label>
                <select id="subject" name="subject">
                    <option value="generalenquiry">General Enquiry</option>
                    <option value="catering">Catering</option>
                    <option value="feedback">Feedback</option>
                    <option value="other">Other</option>
                </select><br>

            <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="ENTER TEXT" style="height:200px"></textarea>
                <span class="error" id="error-message"></span><br>

            <input type="submit" value="SUBMIT" id="submit-btn"><br>
            <span class="error" id="error-form"></span>

        </form>
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