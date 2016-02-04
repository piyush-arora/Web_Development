<?php
	// Start the session 
	
	session_start();
	
	// Database Connection Parameters Details
	
	$host_name	=	"localhost";
	$user_name	=	"adminvW2li3A";
	$password	=	"lrmF9ri73ufv";
	$db_name	=	"lab";
	
	// Get the user posted values from login form
	
	$user=$_POST['user'];
	$pswd =	$_POST['pswd'];
	$email =$_POST['email'];
	
	// Connect to the database
	
	mysql_connect($host_name, $user_name, $password);
	mysql_select_db($db_name);
	
	// Prepare SQL Statement 
	
	$sql_stmt	=	"INSERT INTO `user`(`username`, `PASSWORD`, `email`) VALUES ('$user','$pswd','$email')";
	
	// Run the above query and check the availability of username and password
	
	$query	=	mysql_query($sql_stmt);
	
	
	// If username and password are available then login success other wise fail
	
	if($query	==	1){
		$_SESSION['user_name']	=	$user;
		header('Location: welcome.php');
	}else{
		header('Location: invalid_user.php');
	}
?>