<?php
session_start();
if(isset($_SESSION['Email'])){
 header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="CSS/loginStyle.css">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<header>
<div class="navbar">
        <div class="logo"><a href="index.php"> <img src="images/AawasLogo2.png" alt="Logo"></a></div>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                </ul>
                 <!--Register and Login Button in Navbar  -->
                 <div class="Btns">
                    <a href="register_options.php" class="action_btn">Register</a>
                    <!-- <a href="login_options.php" class="action_btn">Login</a> -->
                </div>
                 

            </div>
   </div>
</header>

<!-- Login options Section -->
    <!-- <section class="container sign-in-form-section">
        <div class="sign-up" style="text-align: center;">
            <h3 style="font-weight: bold;">How do you want to Login?</h3>
            <hr>
            <p>If you want to sign in as a rental, click on the rental login button. Otherwise, click on the owner login button.</p><br><br>
            <a href="rental-login.php"><button type="submit" class="btn btn-info">Rental Login</button></a>
            <a href='owner-login.php'><button type="submit" class="btn btn-info">Owner Login</button></a>
            <a href="admin-login.php"><button type="submit" class="btn btn-info">Admin Login</button></a>
        </div> -->

        <!-- ada -->
        <section class="container">
        <div class="sign-in-form-section">
            <h2>How do you want to login?</h2>
            <hr>
            <p>If you want to sign in as a rental, click on the rental login button. Otherwise, click on the owner login button.</p><br><br>
            <a href="rental-Login.php"><button type="submit" class="btn">Rental Login</button></a>
            <a href="owner-Login.php"><button type="submit" class="btn">Owner Login</button></a>
            <a href="admin-Login.php"><button type="submit" class="btn">Admin Login</button></a>

        </div>
    </section>
    </section>


    <!-- footer Section -->
    <section class="footer">
        <div class="footer-container">
            <div class="footerLogo">
            <a href="index.php"><img src="images/AawasLogoWhite.png" alt="Logo"></a>
            <h2>Thank You For Visiting Us!</h2>
            </div>
            <div class="footer-box">
                <h3>Quick Links</h3>
                <a href="aboutus.php">About Us</a>
                <a href="contactus.php">Contact Us</a>
                <a href="#">Rates</a>
            </div>
            <div class="footer-box">
                <h3>Locations</h3>
                <a href="#">Birauta</a>
                <a href="#">Lamachour</a>
                <a href="#">Bagar</a>
                <a href="#">Lakeside</a>
            </div>
            <div class="footer-box">
                <h3>Contact</h3>
                <a href="tel:9866317885">9866317885</a>
                <a href="mailto:info@aawas.com.np">info@aawas.com.np</a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; 2024 Aawas All Right Reserved</p>
    </div>
</body>
</html>
