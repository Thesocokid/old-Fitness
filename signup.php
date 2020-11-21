<!DOCTYPE html>
<?php session_start();
if (isset($_POST["submit"])){
  $_SESSION['name'] = htmlentities($_POST['name']);

}
?>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Link for the css folder -->
  <link rel="stylesheet" type="text/css" href="iFitnessFriend.css">

</head>
<body>

<!-- Padding for idata -->
<style>
.jumbotron {
  background-color: #4169E1;
  color: #fff;
  padding: 100px 25px;
}

.container-fluid {
  padding: 10px 50px;
}
</style>



                                                                                   <!--NAVAGATION BAR-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.html ">eFitnessFriend</a> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">Home</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="pricing.html">Plans</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>

                                                            <!--Scrollspy "udpade nav bar when scrolling-->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div id="Home" class="container-fluid">
<div id="Our Mission" class="container-fluid">
<div id="Services" class="container-fluid">
<div id="Pricing" class="container-fluid">
<div id="Login" class="container-fluid">


<!-- SIGN UP HERE -->
<form action="signupsql.php" method="post">
  <div class="container">
    


<
    <h1>Sign Up</h1>
    <p><span class ="hr4">Please fill in this form to create an account.<span></p>
    <hr>

    <input type="text" name="name" placeholder="Full name">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="password" name="pwdrepeat" placeholder="Repeat Password">

    <button type ="submit" name="submit">Sign Up</button>
    </form>
 

    <?php
    if(isset($_GET["error"])){
      if($_GET["error"] == "emptyinput"){

        echo"<p>Fill in all fields!</p>";
      }

      else if($_GET["error"] == "invaliduid"){
        echo"<p>Choose a proper username!</p>";

      }

        else if($_GET["error"] == "invalidemail"){
        echo"<p>Choose a proper username!</p>";

      }
       else if($_GET["error"] == "passwordsdontmatch"){
        echo"<p>Passwords don't match!</p>";

      }

        else if($_GET["error"] == "stmtfailed"){
        echo"<p>Somthing went wrong, try again!</p>";

      }
        else if($_GET["error"] == "usernametaken"){
        echo"<p>Username already taken!</p>";

      }
        else if($_GET["error"] == "none"){
        echo"<p>You have signed up!</p>";

      }

    }






    ?>


    <div class="clearfix">
      <a href='home.html'>
      <button type="button" class="cancelbtn">Cancel</button>
    </a>



            </div>
          </div>
      
















</html> <!--END-->