<?php 
session_start();
if(isset($_SESSION["email"])){
  header("location:admin/admin-index.php");
}

include("navbar.php");
include("admin-engine.php");

 ?>

 <style>
  .container{
    max-width: 1068px;
  margin-left: auto;
  margin-right: auto;
  }
  /* nav section css */
.BtnLogin{
  position: relative;
  background-color: #9448d2;
    color: #fff;
    border: none;
    outline: none;
    border-radius: 5px;
    font-size: 1.8rem;
    font-weight: bold;
    cursor: pointer;
    margin: 0px;
    padding: 0.5rem 50rem;
}
.BtnLogin:hover{
  scale: 1.05;
  background-color: #b16bea;
  text-decoration:none;
}
.form-group a{
  color:blue;
}
.form-group a:hover{
  text-decoration:none;
  color:#9448d2;
}
  </style>
<div class="container">
  <h3 style="font-weight: bold; text-align: center;">Admin Login</h3><hr><br><br>
  <form method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
    <div class="form-group">
      <a href="#">Lost your Password ? </a> 
    </div>
    <center><input type="submit" id="submit" name="admin_login" class="BtnLogin" value="Login"></center>
  </form>
</div>