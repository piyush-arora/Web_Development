<?php

$x=100;

if (isset($_POST['project_submit'])&&isset($_POST['Project_List']))
{
 	$pro=$_POST['Project_List'];
	if($pro==1)
	{
 		echo strtr(file_get_contents('templates/led_toggle.html'), array());


 	}
 	else if ($pro==2)
 	 {
		header('Location:'."http://localhost/my_projects/iot/php%20design/");
		//$homepage = file_get_contents('http://192.168.43.189/SWITCH');
	}
 	

}
 else
 {
 echo strtr(file_get_contents('templates/projects.html'), array());	
 }


?>
