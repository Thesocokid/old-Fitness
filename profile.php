<!DOCTYPE html>
<html lang="en">

<head>
  <title>eFitnessFriend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Link for the css folder -->
  <link rel="stylesheet" type="text/css" href="settings.css">

</head>
<div id="page-wrap"><!--delete if neecc -->  



<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <div id="Dashboard" class="container-fluid">
    <div id="Goals" class="container-fluid">
      <div id="Meals" class="container-fluid">
        <div id="iData" class="container-fluid">
          <div id="Settings" class="container-fluid">

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


            <!--Settings Page-->

            <div class="container-fluid settings">
              <h1>Profile</h1>
            <?php
            session_start();
                   
            ?>
              <!--Top container-->
              <div class="top-container well">
                <div class="image-container">
                  <div class="image">
                    <img src="https://i.imgur.com/zrcXXt3.jpg" class="img-rounded" alt="user image" style="width: 20em;">
                  </div>
                  <div class="choose-file">
                    <!-- <button type="button" class="btn btn-primary"><input type="file"> Choose File</button> -->
                    <div class="upload-btn-wrapper">
                      <button class="btn btn-primary upload-button">Upload a file</button>
                      <input type="file" name="image" />
                    </div>
                  </div>
                  <form>

                </div>

                <div class="form-group">
                  <label for="comment">Description:</label>
                  <textarea class="form-control" rows="5" id="comment">I will reach my goal!</textarea>
                </div>
                </form>
              </div>

              <!-- Middle Container-->
              <div class="middle-container well">
                
                <div class="personal-info-container">
                  <h4>Personal Information</h4>
                  <div class="personal-info">
                  <div class="label-container">
                    
                    <p>First Name:</p>
                    <p>Email:</p>

                  </div>
                  <div class="values-container">
                 <?php   
                  
                  
                  echo "<p>" . $_SESSION["name"] . "</p>";

                  echo "<p>" . $_SESSION["email"] . "</p>";
                   
                    ?>


                    

                  </div>
                </div>
               
                </div>

               


                <div class="display-info">

                  <h4>Display public info</h4>
                  <div class="full-name">
                    <label for="fullname">Full name:</label>
                    <input type="checkbox" id="fullname">
                  </div>
                  <div class="weight-container">
                    <label for="weight">Weight:</label>
                    <input type="checkbox" name="" id="weight">
                  </div>
                  <div class="image-button-container">
                    <label for="image">Image:</label>
                    <input type="checkbox" name="" id="image">
                  </div>
                  <hr>
                  <h4>Health Conditions</h4>
          <?php   
                  
                  $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
                  $user_id = $_SESSION["userid"];
                  $query = "SELECT * FROM user_data where `user_id`= $user_id";
                  $query_run = mysqli_query($con, $query);
                  while($row = mysqli_fetch_array($query_run)){

                    
                     echo $row['medicalConditions']; 
                  }
                  ?>
                   
                    


                </div>
              </div>
              <!--Bottom container-->
              <div class="bottom-container well">
                <div class="payment-container ">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPaymentModal">Add
                    Payment</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#changeBillingModal">Change Health Info</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#changePlanModal">Change Plan</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#removePlanModal">Deactivate Account</button>



                  <!-- Add payment Modal -->
                  <div class="modal fade" id="addPaymentModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Add Payment</h4>
                        </div>
                        <div class="modal-body add-payment-modal">
                         
                         <input type="text" name = "nameOnCard" placeholder="Name on Card" required>
                         <input type="text" name ="cardNumber"  placeholder="Card Number" required>
                         <input type="text" name ="expirationDate"  placeholder="Expiration Date" required>
                         <input type="text" name ="CVV"  placeholder="CVV" required>
                         <input type="text" name ="streetAddress"  placeholder="Street Address" required>
                         <input type="text" name ="city"  placeholder="City" required>
                         <input type="text" name ="state"  placeholder="State" required>
                         <input type="text" name ="zipCode"  placeholder="Zipcode" required>

                          
                         




                        </div>
                        <div class="modal-footer">
                          <button type ="submit" name="submit">Submit</button>
                        </div>
                      </div>

                    </div>
                  </div>



                  <!-- Change Billing Modal -->
                    <form action="profileHealth.php" method="post">
                  <div class="modal fade" id="changeBillingModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Change Health Information</h4>
                        </div>
                      
                        <div class="modal-body flex">

                         <div class="container labels column-flow">
                         <input type="text" name = "medicalConditions" placeholder="Medical Conditions" required>
                         <input type="text" name = "currentWeight" placeholder="Current Weight" required>
                         <input type="text" name = "targetWeight" placeholder="Target Weight" required>
                         <input type="text" name = "bloodPressure" placeholder="Blood Pressure" required>
                         <input type="text" name = "targetBloodPressure" placeholder="Target Blood Pressure" required>
                         <input type="text" name = "heatRate" placeholder="Heart Rate" required>
                         <input type="text" name = "bloodSugar" placeholder="Blood Sugar" required>
                         <input type="text" name = "targetBloodSugar" placeholder="Target Blood Sugar" required>
                         <input type="text" name = "targetCalories" placeholder="Target Calories" required>
                        
                        </form>
                         <button type ="submit" name="submit">Submit</button>
                          </div>
                           

                        </div>
                        <div class="modal-footer">
                          
                        </div>
                      </div>

                    </div>
                  </div>

                  <!-- Change Plan Modal -->
                  <div class="modal fade" id="changePlanModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Change Plan</h4>
                        </div>
                        <div class="modal-body">
                          <label for="monthly" id="monthly">Monthly</label>
                          <input type="checkbox" id="monthly">

                          <label for="three-month">3-month</label>
                          <input type="checkbox" id="three-month">

                          <label for="annual">Annual</label>
                          <input type="checkbox" id="annual">

                          <label for="annual">Cancel Plan</label>
                          <input type="checkbox" id="annual">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Change</button>
                        </div>
                      </div>

                    </div>
                  </div>

                  <!--Remove Plan Modal-->
                  <div class="modal fade" id="removePlanModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Deactivate account </h4>
                        </div>
                        <div class="modal-body">
                          <div class="alert alert-success">
                            <strong>Success!</strong> You have successfully deactivated your account.
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                        </div>
                      </div>

                    </div>
                  </div>
                  
                 
                </div>
                <!--Payment Container Ends-->

                <div class="notifications-container">
                  <h4>Notifications</h4>
                  <div class="meals-choice">
                    <label for="meals">Meals</label>
                    <input type="checkbox" id="meals">
                  </div>
                  <div class="exercise-choice">
                    <label for="exercise">Exercise</label>
                    <input type="checkbox" id="exercise">
                  </div>

                  <div class="email-choice">
                    <label for="email">By email</label>
                    <input type="checkbox" id="email">
                  </div>


                  <div class="desktop-choice">
                    <label for="desktop">On your desktop</label>
                    <input type="checkbox" id="desktop">
                  </div>

                </div>
              </div>

              <!--Update Account-->
              <div class="center-button">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateProfile">Update
                  profile</button>
                <div class="modal fade" id="updateProfile" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Profile</h4>
                      </div>
                      <div class="modal-body">
                        <div class="alert alert-success">
                          <strong>Success!</strong> You have updated your profile.
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


          </div>


        </div>
</body>



<!-- INSERT CODE HERE -->













<!--Up-arrow return to top-->


<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Back To The Top</a></p>
</footer>


</body>
</div>


</html>
<!--END-->