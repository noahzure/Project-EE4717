

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
        <div class="contactus" style="text-align: center">
		<h1>Contact Us</h1>	
        <form action="../php/sendContact.php" method="post" id="contact-us">
        <table style="width: 100%; margin: 30px auto; table-layout:fixed" >
            <tr >
                <td colspan ="3" style="padding-top:20px">Name</td>
            </tr>
            <tr>           
            <td style="text-align:right"><label for="name"></label></td>
            <td><input type="text" id="name" name="name" placeholder="Enter Name" <?php echo 'value="'.$name.'"';                                

                                ?>></td>
                <td style="text-align:left"><span class="error" id="error-name"></span></td>
            </tr>
            <tr>
                <td colspan ="3" style="margin-top:20px">Email</td>
            </tr>
            <tr>
            <td style="text-align:right"><label for="email"></label></td>
                <td><input type="text" id="email" name="email" placeholder="Enter Email" <?php echo 'value="'.$email.'"';                                

                                ?>></td>
                <td style="text-align:left"><span class="error" id="error-email"></span></td>
            </tr>
            <tr>
                <td colspan ="3" style="margin-top:20px">Purpose</td>
            </tr>
            <tr>
            <td style="text-align:right"><label for="subject"></label></td>
                <td><select id="subject" name="subject">
                    <option value="generalenquiry">General Enquiry</option>
                    <option value="catering">Catering</option>
                    <option value="feedback">Feedback</option>
                    <option value="other">Other</option></td>
                </select></td>
            </tr>
            <tr>
                <td colspan ="3" style="margin-top:20px">Message</td>
            </tr>
            <tr>
            <td style="text-align:right"><label for="message"></label></td>
                <td><textarea id="message" name="message" placeholder="Enter Message" style="height:200px"></textarea></td>
                <td style="text-align:left"><span class="error" id="error-message"></span></td>
            </tr>
            </table>
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