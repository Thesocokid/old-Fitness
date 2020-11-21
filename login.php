<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Link for the css folder -->
  <link rel="stylesheet" type="text/css" href="iFitnessFriend.css">

</head>
<body>


                                                                                   <!--NAVAGATION BAR-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.html">eFitnessFriend</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html">Home</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="pricing.html">Plans</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Sign Up</a></li>
      </ul>
    </div>
  </div>
</nav>

                                                                                      <!--Login -->
<br> 
<br> 
<br> 
<br> 

<

 <form action="loginsql.php" method="post">

  <div class="container">

    <input type="text" name = "uid" placeholder="Username" required>
    <input type="password" name ="pwd"  placeholder="Password" required>
    <button type ="submit" name="submit">Log In</button>


</form>
    <?php
    if(isset($_GET["error"])){
      if($_GET["error"] == "emptyinput"){

        echo"<p>Fill in all fields!</p>";
      }

      else if($_GET["error"] == "wronglogin"){
        echo"<p>Incorrect login information!</p>";

      }

    }

    ?>

  </div>

  <div class="container" >
    <a href='home.html'>
    <button type="button" class="cancelbtn" >Cancel</button>

  </div>



<!--
<button type="button">Login</button>
<button type="button" value="Login">Login</button>








                                                            <!--Scrollspy "udpade nav bar when scrolling-->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div id="Home" class="container-fluid">
<div id="Services" class="container-fluid">
<div id="Pricing" class="container-fluid">
<div id="Login" class="container-fluid">







</body>

</html> <!--END-->