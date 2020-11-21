 <?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');

if(!$con){

	echo 'Databse Not Connected To Server';
}

if (isset($_POST["submit"])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$pwdRepeat = $_POST['pwdrepeat'];

	require_once 'functions.php';






if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false ){

	header("location: signup.php?error=emptyinput");
	exit();
}

if(invalidUid($username) !== false ){

	header("location: signup.php?error=invaliduserid");
	exit();
}

if(invalidEmail($email) !== false ){

	header("location: signup.php?error=invalidemail");
	exit();
}

if(pwdMatch($pwd, $pwdRepeat) !== false ){

	header("location: signup.php?error=passwordsdontmatch");
	exit();
}

if(uidExists($con, $username, $email,$name) !== false ){

	header("location: signup.php?error=usernametaken");
	exit();
}
 $_SESSION['name'] = $name;
createUser($con, $name, $email, $username, $pwd);
	
		

	header("location: login.php");
	exit();

}


