
 <html>
<head>
<!-- <link rel="stylesheet" href="style2.css"> -->
   <style>
        /* Google Fonts */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

/* Navbar section css */
* {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  scroll-padding-top: 3rem;
  list-style: none;
  text-decoration: none;
}
:root {
  --main-color:  #9448d2;
  --second-color: #192f6a;
  --text-color: #314862;
  --bg-color: #ffffff;
  --box-shadow: 2px 2px 18px rgb(14 52 54 / 15%);
}
img {
  width: 100%;
}
body {
  background-color: #faf5ff;
  color: var(--text-color);
}
section {
  padding: 4.5rem 0 3rem;
}
.container {
  max-width: 1068px;
  margin-left: auto;
  margin-right: auto;
}


/* nav section css */
header {
  position: relative;
  padding: 0;
}

/* nav links css */
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
}

.action_btn:hover {
  scale: 1.05;
  background-color: #b16bea;
}

.action_btn:active {
  scale: 0.95;
}

/* css for alert */
        .alert {
            padding: 20px;
            background-color: red;
            color: white;
        }

        /* Css for close btn */
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .closebtn:hover {
            color: black;
        }
/* Log IN */
.login {
  display: grid;
  grid-template-columns: 0.4fr 1fr;
  align-items: center;
  min-height: 100vh;
  margin-top: 2rem;
  
}
.login-container {
  display: flex;
  flex-direction: column;
  row-gap: 1rem;
  
}
.login-container h2 {
  font-size: 1.4rem;
}
.login-container p {
  font-size: 0.9rem;
}
.login-container form-control {
  display: flex;
  flex-direction: column;
}
.login-container form span {
  font-size: 0.9rem;
  color: #8a8a8a;
  margin-bottom: 4px;
}
.login-container form input {
  border: 1px solid #8a8a8a;
  outline: none;
  padding: 10px;
  margin-bottom: 1rem;
  background: var(--bg-color);
  width:305px;
  height:40px;
}
.login-container form .buttom {
  outline: none;
  border: none;
  background: var(--main-color);
  color: var(--bg-color);
  font-size: 0.85rem;
  font-weight: 500;
}
.login-container form .buttom:hover {
  background: #3492fd;
}
.login-container form a {
  font-size: 0.9rem;
  text-align: right;
}
/* .login-container .btn {
  border-radius: 0;
  text-align: center;
} */
/* Register Btn */
.login-container .btn {
  position: relative;
  padding: 8px 75px;
    background: var(--main-color);
    color: var(--bg-color);
}
.login-container  .btn:hover {
  background: #b16bea;
}
#rentalimg {
  border-radius:5px;
  width: 70%;
  position: relative;
  left:100px;
  box-shadow: 2px 2px 18px #b16bea;

}



/* footer section css */
.footer {
  position: relative;
  height: 60vh;
  background: var(--main-color);
  color: var(--bg-color);
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
    top: -70px;
    font-size:12px;
    width: 500px;
}
.footer-box {
  margin-top: 15px;
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
  padding: 20px;
  text-align: center;
  color: var(--bg-color);
  background: var(--main-color);
}
    </style>
</head>
<body>
<header>
    <div class="navbar">
        <div class="logo"><a href="index.php"> <img src="images/AawasLogo2.png" alt="Logo"></a></div>
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="#">Blog</a></li>
                </ul>
                 <!--Login Button in Navbar  -->
                <a href="login_options.php" class="action_btn">Login</a>
            </div>
   </div>
</header>
<!-- Form section -->
 <div class="login container">
<div class="login-container">
  <h2>Rental Login</h2><hr>
  <p>Login To Continue</p>
  <?php if (isset($GLOBALS['login_error'])): ?>
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    <strong><?php echo $GLOBALS['login_error']; ?></strong> Click here to <a href="rental-register.php" style="color: lightblue;"><b>Register</b></a>.
  </div>
  <?php endif; ?>
  <form method="POST" action="rental-operation.php">
    <!--Actual form section -->
    <div class="form" >
      <label for="email">Email:</label><br>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form">
      <label for="pwd">Password:</label><br>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <div class="form">
      <a href="#">Lost your Password ? </a> 
    </div>
    <input type="submit" id="submit" name="rental_login" class="btn" value="Login">
  </form>
</div>
<div class="image">
  <img src="images/RentalLogin.jpg" id="rentalimg" alt="Rental">
</div>
</div>

<!-- Footer section -->
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