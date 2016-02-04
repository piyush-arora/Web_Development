<?php
	session_start();
	if(isset($_SESSION['user_name']))
	{
		readfile('./index1.html');
		//readfile("http://www.hackincloud.com/test1.html");
		//echo "<h2> Welcome to " . $_SESSION['user_name'] . " </h2>";
		//echo "<br />";
		//echo "<a href = 'logout.php'> Logout </a>";


	}
	else
	{
			header('Location: login_logic.php');
	}
?>