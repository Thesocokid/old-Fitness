<!DOCTYPE html>
<html lang="en">
<head>
  <title>eFitnessFriend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

  <!-- Link for the css folder -->
<link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
<div id="page-wrap">                                                                               <!--This page belongs to:Chandler Godfrey   -->


<!-- Padding for dashboard -->
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
      <a class="navbar-brand" href="login.php">eFitnessFriend</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="goals.php">Goals</a></li>
      <li><a href="meals.html">Meals</a></li>
      <li><a href="edata.html">eData</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="logout.php">Logout</a></li>      
    </div>
  </div>
</nav>

                                                            <!--Scrollspy "udpade nav bar when scrolling-->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div id="Dashboard" class="container-fluid">
<div id="Goals" class="container-fluid">
<div id="Meals" class="container-fluid">
<div id="iData" class="container-fluid">
<div id="Settings" class="container-fluid">






                                                             <!-- INSERT CODE HERE -->



 <h1>Dashboard</h1>

        <?php   
        session_start(); 
        if (isset($_SESSION["useruid"])){
          echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
        }
        ?>

<a href='meals.html'> 
  <button class="btn btn-lg">Add Meals</button>
</a>
  <a href='goals.php'> 
  <button class="btn btn-lg">Add Exercise</button>
</a>
  <form action="dashboardfood.php" method="post">
<!--Food container-->

<div class="container">           
  <table class="table table-striped table table-bordered">
    <thead>
      <tr>
        <h1>Custom Meal Input</h1>
        <th>Time of day</th>
        <th>Food</th>
        <th>Amount</th>
        <th>Calories</th>
      </tr>
    </thead>
   
 <tbody>
      <tr>
        <td><input type="text" placeholder="Time" name="timeOfDay" required></td>
        <td><input type="text" placeholder="Food" name="foodType" required></td>
        <td><input type="text" placeholder="Amount" name="foodAmount" required></td>
        <td><input type="text" placeholder="Calories" name="foodCalories" required></td>
      </tr>

 </form>

    </tbody>
    </table>
  <input class="btn btn-primary btn-block" data-toggle="modal " type ="submit" value="Submit" onclick="myFunction()" 
  data-target="#readMoreModal"></input>


  <script>
    function myFunction() {
    alert("Sucscess! Your data has been recorded!");
        }
        </script>
  
 
   
</div>





<div class="container">           
  <table class="table table-striped table table-bordered">
      <form action="dashboardWorkouts.php" method="post">
    <thead>
      <tr>
        <h1>Custom Workout Input</h1>
        <th>Workout</th>
        <th>Reps or Miles</th>
        <th>Calories Burned</th>
      </tr>
    </thead>
 <tbody>
      <tr>
        <td><input type="text" placeholder="Workout" name="userWorkout" required></td>
        <td><input type="text" placeholder="Reps or Miles" name="userRepMiles" required></td>
        <td><input type="text" placeholder="Calories Burned" name="userCaloriesBurned" required></td>
     </tbody>
      </tr>
      </table>
  <input class="btn btn-primary btn-block" data-toggle="modal " type ="submit" value="Submit" onclick="myFunction()" 
  data-target="#readMoreModal"></input>


  <script>
    function myFunction() {
    alert("Sucscess! Your data has been recorded!");
        }
        </script>
      </form>
  
   



 






    

</body>
<div class="container">
  <div class="text-center">
    <h2>Weight Center</h2>
    <center><h4>Your health data made easy!</h4></center>

  </div>
</div>

  <br>
  <br>

  <div class="row">
    <div class= "col-sm-3 col-md-6" >
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Calorie Center</h1>
        </div>
        <div class="panel-body">
          <p2><strong>Daily allowance:<strong></p2> <br></br>
          <?php   
                  
                  $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
                  $user_id = $_SESSION["userid"];
                  $query = "SELECT * FROM user_data where `user_id`= $user_id";
                  $query_run = mysqli_query($con, $query);
                  while($row = mysqli_fetch_array($query_run)){

                    
                     echo $row['targetCalories']; 
                  }
                  ?>
          <hr></hr>
          <p2><strong>Calories Consumed:<strong></p2>
          <h6> 425</h6>
          <hr></hr>
          <p2><strong>Burned Calories:<strong></p2>
          <h6> 300</h6>
          

        </div>

        <div class="panel-footer">
          <p2>Daily Comments:</p2>
          <br></dr>
          <textarea rows="6" cols="50"> </textarea>
          <br></br>
          <button onclick="myFunction()">Submit</button>

  <script>
    function myFunction() {
    alert("Sucscess! Changes have been saved recorded!");
        }
        </script>

 
        </div>
      </div>
    </div>


    <!-- container two-->
     <div class="col-sm-3 col-md-6">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>My Weight</h1>
        </div>
        <div class="panel-body">

 
          <p2><strong> My weight:</strong></p2> <br></br>
           <?php   
                  
                  $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
                  $user_id = $_SESSION["userid"];
                  $query = "SELECT * FROM user_data where `user_id`= $user_id";
                  $query_run = mysqli_query($con, $query);
                  while($row = mysqli_fetch_array($query_run)){

                    
                     echo $row['currentWeight']; 
                  }
                  ?>
         <br></br>
          <p2><strong> My goal:</strong></p2>   <br></br>
           <?php   
                  
                  $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
                  $user_id = $_SESSION["userid"];
                  $query = "SELECT * FROM user_data where `user_id`= $user_id";
                  $query_run = mysqli_query($con, $query);
                  while($row = mysqli_fetch_array($query_run)){

                    
                     echo $row['targetWeight']; 
                  }
                  ?>
        </div>


        </div>
      </div>
    </div>
  </div>
</div>
                                                            <!--Up-arrow return to top-->
<style>
footer .glyphicon {
  font-size: 20px;
  margin-bottom: 20px;
  color: #f4511e;
}
</style>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Back To The Top</a></p>
</footer>
</div>
</body>
</html> <!--END-->
