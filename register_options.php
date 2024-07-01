<?php 
session_start();
if(isset($_SESSION["email"])){
  header(".php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Google Fonts */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
        /* Root Variables */
        :root {
            --primary-color: #9448d2;
            --secondary-color: #192f6a;
            --text-color: #314862;
            --background-color: #faf5ff;
            --button-hover-color: ##b16bea;
            --button-gradient: linear-gradient(45deg, #2288ff, #0056b3);
        }

        body {
            font-family: 'poppins', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        /* nav section css */
header {
  position: relative;
  padding: 0;
}

.navbar {
  width: 100%;
  /* background-color: rgb(246, 210, 241); */
  height: 80px;
  max-width: 1800px;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.navbar .logo img {
  margin: 30px 15px 5px -15px;
  height: 100px;
  width: 100px;
  position: relative;
}
ul li {
  list-style: none;
}

ul li a {
  text-decoration: none;
  color: #313638;
  font-size: 1rem;
  font-weight: bolder;
}

ul li a:hover {
  color: #9448d2;
}
/* HEADER */


.navbar .links {
  display: flex;
  gap: 2rem;
}

.navbar .Btns {
  display: flex;
  gap: 2rem;
  border: 0.5px;
  border-radius: 3px;
}

/* Action buttons */
.action_btn {
  background-color: #9448d2;
  color: #fff;
  border: none;
  outline: none;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: bold;
  cursor: pointer;
  margin: 10px;
  padding: 0.5rem 1rem;
  text-decoration:none;
}

.action_btn:hover {
  scale: 1.05;
  background-color: #b16bea;
  text-decoration:none;
}

.action_btn:active {
  scale: 0.95;
}







/* Container Section css */
    .container {
        position: relative;
        top: 100px;
        height: 80vh;
        max-width: 1370px;
        margin: 70px auto 0 auto;
        padding: 20px;
        }

        .sign-in-form-section {
            background-color:#fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 60px;
            text-align: center;
        }

        .sign-in-form-section h3 {
            font-size: 2rem;
            color: Black;
            margin-bottom: 20px;
        }

        .sign-in-form-section p {
            font-size: 1.1rem;
            color: Black;
            margin-bottom: 40px;
        }

        .btn {
 background-color:var(--primary-color);
 color:azure;
 border: none;
 border-radius: 30px;
 padding: 12px 30px;
 margin: 10px;
 cursor: pointer;
 transition: background 0.3s, transform 0.3s, box-shadow 0.3s;
 width: 200px;
 font-size: 16px;
 box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
 display: inline-block;
}


.btn:hover {
 background-color:#b16bea;
 transform: translateY(-3px);
 box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
}

.btn:active {
 transform: translateY(1px);
}





    /* footer section css */
footer {
  position: relative;
  height: 80vh;
  background: var(--primary-color);
  color: white;
  border-radius: 5rem 5rem 0 0;
}
.footer-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, auto));
  gap: 2rem;
}
.footer-container .footerLogo img{
  position: relative;
  left:20px;
  width: 40%;
}
.footer-container h2 {
    top: -70px;
    font-weight: bolder;
    position: relative;
    left: 50px;
}

.footer-container p{
    text-align: justify;
    left: 50px;
    position: relative;
    top: -80px;
    font-size:12px;
    width: 500px;
}
.footer-box {
  margin-top: 150px;
  display: flex;
  flex-direction: column;
  gap: 0.2rem;
}
.footer-box h3 {
  margin-bottom: 1rem;
  font-size: 1.5rem;
  font-weight: bolder;
  text-align: left;
}
.footer-box a {
  font-size: 0.9rem;
  color: var(--bg-color);
  font-weight: 400;
  margin-bottom: 0.5rem;
}
.footer-box a:hover {
  color: var(--second-color);
}
.social a {
  font-size: 30px;
  margin-right: 1rem;
}
.social a:hover {
  color: var(--second-color);
}
.copyright {
    margin-top: 2.5rem;
  padding: 20px;
  text-align: center;
  color: var(--bg-color);
  background: var(--main-color);
}

        /* Responsive Design */
        @media (max-width: 768px) {
            .sign-in-form-section {
                padding: 20px;
            }

            .footer-container {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 576px) {
            .btn {
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
     <!-- Navbar section -->
     <header>
    <div class="navbar">
        <div class="logo"><a href="index.php"> <img src="images/AawasLogo2.png" alt="Logo"></a></div>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
                </ul>
                 <!--Login Button in Navbar  -->
                <a href="login_options.php" class="action_btn">Login</a>
            </div>
   </div>
</header>

<!-- Container section -->
    
    <section class="container">
        <div class="sign-in-form-section">
            <h2>How do you want to Register?</h2>
            <hr>
            <p style="font-size: 18px;">If you want to register as a Rental click on Rental register button otherwise click on owner register button.</p>
            <a href="rental-register.php">
                <button type="submit" class="btn">Rental Register</button>
            </a>
            <a href="owner-register.php">
                <button type="submit" class="btn">Owner Register</button>
            </a>
        </div>
    </section>



    <!-- Footer -->
    <footer>
    <section class="footer">
        <div class="footer-container">
            <div class="footerLogo">
            <a href="index.php"><img src="images/AawasLogoWhite.png" alt="Logo"></a>
            <h2>About Us</h2>
            <p>Our mission is to provide you with a comfortable and enjoyable living experience in a home that you can truly call your own. We understand the importance of finding the perfect place to live, and we are committed to helping you make the most of your time with us.</p>
            </div>
            
            
            <div class="footer-box">
                <h3>Quick Links</h3>
                <a href="aboutus.php">About Us</a>
                <a href="contactus.php">Contact Us</a>
                <a href="#">Rates</a>
            </div>
            <div class="footer-box">
                <h3>Get In Touch</h3>
                <a href="#"><i class="fas fa-map-marker-alt"></i> Simalchaur Pokhara</a>
                <a href="#"><i class="fas fa-phone"></i> 9866317885</a>
                <a href="#"><i class="fas fa-envelope"></i> info@aawas.com.np</a>
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
    </footer>
</body>
</html>
