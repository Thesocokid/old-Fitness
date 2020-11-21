 <?php 

$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');


if(isset($_POST["submit"])){

$username = $_POST['uid'];
$pwd = $_POST['pwd'];

require_once 'functions.php';

if(emptyInputLogin($username, $pwd) !== false ){

	header("location: login.php?error=emptyInputLogin");
	exit();
}


loginUser($con, $username, $pwd);
}
else{
	header("location: login.php");
	exit();	
}
