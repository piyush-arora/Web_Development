<?php
  	$sLogin = escape($_POST['login']);
    $sPass = escape($_POST['pass']);
    require_once 'database_connect.php';
    $db=new Database_Connect();
    $insert_query="INSERT INTO `user_login`(`serial`, `login_id`, `password`, `gender`, `email`) VALUES ('','$sLogin','$sPass','$iGender','$sEmail')";
    $run_query=mysql_query($insert_query);
    if($run_query)
    {
      echo strtr(file_get_contents('templates/step3.html'), array());
    

   }
   else
   {
     echo strtr(file_get_contents('templates/step2.html'), array());
  
   }



?>