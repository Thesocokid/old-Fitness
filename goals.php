<!DOCTYPE html>
<html lang="en">
<head>
  <?php session_start();?>
    <title>eFitnessFriend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Link for the css folder -->
<link rel="stylesheet" type="text/css" href="goals.css">

</head>
<body>                                                                               <!--This page belongs to: Ivan Villasenor Garcia-->

<!-- Padding for goals -->
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
      <a class="navbar-brand" href="dashboard.html">eFitnessFriend</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="goals.php">Goals</a></li>
        <li><a href="meals.html">Meals</a></li>
        <li><a href="edata.html">eData</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li> 
      </ul>
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



<h1 class="a">Goals</h1>

<!------ Table for current/target goals -------->
<div class="container text-center">
  
  <div class="container">
    <div class="container text-center">         
      <table class="table table-bordered table table-striped">
        <thead>
          <tr>
            <th><b>Current Stats:</b></th>
          </tr>
        </thead>
        <tbody>

                           <?php   
                  
            $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
            $user_id = $_SESSION["userid"];
            $query = "SELECT * FROM user_data where `user_id`= $user_id";
            $query_run = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($query_run)){
                                        

                      $weight = $row['currentWeight'];          
                      $bloodPressure = $row['bloodPressure'];   
                      $currentBloodPressure = $row['targetBloodPressure'];   
                      $calorieBurn = $row['targetCalories']; 
                      $targetWeight = $row['targetWeight'];  
                      $targetBloodPressure = $row['targetBloodPressure'];  
                      $targetBloodSugar = $row['targetBloodSugar']; 
            

                 
                  }
                    ?>
          <tr>
            <td>Current Weigth:<?php echo $weight ?> </td>
          </tr>
          <tr>
            <td>Blood Pressure:<?php echo $bloodPressure ?></td>
          </tr>
          <tr>
            <td>Blood Sugar: <?php echo $currentBloodPressure ?></td>
          </tr>
          <tr>
            <td>Calories Burned: <?php echo $calorieBurn ?></td>
          </tr>
        </tbody>
      </table>
    <div class="container text-center">         
      <table class="table table-bordered table table-striped">
        <thead>
          <tr>
            <th><b>Goals:</b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Desired Weigth: <?php echo $targetWeight ?></td>
          </tr>
          <tr>
            <td>Desired Blood Pressure:<?php echo $targetBloodPressure ?></td>
          </tr>
          <tr>
            <td>Desired Blood Sugar:<?php echo $targetBloodSugar ?></td>
          </tr>
          <tr>
            <td>Desired Calories to Burn :<?php echo $calorieBurn ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--Middle container-->
                <div class="container text-center">
                  <div class="Sticking-container well">
                    <div style="background-color:  #0066ff ; padding: 3px; border: 1px ;color: white">
                    <h3> Recommended Workouts </h3>
                  </div>
          <script src="https://www.gstatic.com/charts/loader.js"></script>
          <select id="menu">
            <option selected>weight</option>
            <option>bloodSugar</option>
            <option>bloodPressure</option>
            <option>heartRate</option>
          </select>

                          <div class="panel">
                            <h4>Cardio:</h4>
                            <p>10 min run</p>
                            <p>3x10 box jumps</p>
                            <p>3x10 burpess</p>
                            <p>3x12 deadlifts</p>
                            <p>30 min on bike</p>
                            <label for="workout1">add workout</label>
                            <input type="checkbox" class="workout1">
                          </div>
                          <div class="panel">
                            <h4>Endurance:</h4>
                            <p>10 min run</p>
                            <p>4x15 10 min tire flip</p>
                            <p>4x15 battle ropes</p>
                            <p>3x20 squats</p>
                            <p>35 min stairmaster</p>
                            <label for="workout2">add workout</label>
                            <input type="checkbox" class="workout1">
                          </div>
                          <div class="panel">
                            <h4>Abs:</h4>
                            <p>10 min run</p>
                            <p>3x12 sit ups</p>
                            <p>3x12 russian twists</p>
                            <p>3x12 1 min plank</p>
                            <p>3x12 hanging leg raises</p>
                            <p>30 mins on row machine</p>
                            <label for="workout3">add workout</label>
                            <input type="checkbox" class="workout1">
                          </div>
                        <button type="button" onclick="checkAll()"class="btn btn-primary btn-block" data-toggle="modal" data-target="#addWorkoutModal">Add Workout(s)</button>
                        <div class="modal fade" id="addWorkoutModal" role="dialog">
                          <div class="modal-dialog">
  
                          <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Workout</h4>
                              </div>
                            <div class="modal-body">
                                <div class="alert alert-success">
                                    You have successfully added your workout(s).
                                      </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
<script type="text/javascript"> 
    //create function of check/uncheck box 
    function checkAll() { 
        var inputs = document.querySelectorAll('.workout1'); 
        for (var i = 0; i < inputs.length; i++) { 
            inputs[i].checked = false; 
        } 
    } 
    window.onload = function() { 
        window.addEventListener('load', checkAll, true); 
    } 
</script> 
<!--Bottom container-->
                <div class="container text-center">
                  <div class="Sticking-container well">
                    <h3> Tips to stick with your diet plan!</h3>
                      <h5> Obesity:</h5>
                      <h4> It's okay to have on cheat meal per week and even a cheat day, eating healthy
                        all the time can suck and get very boring. If you can balance out a day or even a meal
                        where you can eat fried food go for it! You need to remember to control your eating habits,
                        such as what you eat and when you eat it. For example, eating junk food late at night is not okay!</h4>
                  </div>
                </div>

                <div class="container text-center">
                  <div class="Sticking-container well">
                    <h3> Tips on keeping up with your workout!</h3>
                      <h5> Obesity:</h5>
                      <h4> Try to do your workouts around the same time of the day, that way you can easily fix a schedule for your 
                        workouts that can still revolve around your job, friends, etc. Try to do wokrouts that you enjoy doing and
                        seem easy but effiecient, in order for you to achieve your goal as soon as possible.</h4>
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





</html> <!--END-->