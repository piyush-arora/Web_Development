<?php

require_once 'database_connect.php';
   $db=new Database_Connect();
   $id=1;
   $time=10;

   $username="piyush";
   $pass="piyush123";
   if(isset($db))
   {

   	echo "successfully connected to database";
   	$insert_query="INSERT INTO `my_table`(`id`, `time`, `user_name`, `pass_word`) VALUES ($id,$time,$username,$pass)";
	$run_query=mysql_query($insert_query);
	if(isset($run_query))
	{
		echo "haha";
	}
	else
	{
		echo "grrr";
	}

   }

   else
   {
   	echo "cant connect to database";
   }


?>