<?php
 require_once 'database_connect.php';
 	$handle=fopen('serial.txt','r');//i want to write  use for a to append
 	$buffer = fgets($handle, 10);
 	fclose($handle);
 	//echo $buffer;
    $db=new Database_Connect();

   if (isset($db)) 
   {
		
		$data=array();	
		$data=$db->get_new_data($buffer);
	  	if($data!=0)
	  	{
	  		echo 'new data found !!!!'.'</br>';
	  		echo 'id----->'.$data["id"].'</br>';
	  		echo 'name----->'.$data["name"].'</br>';
	  		echo 'password----->'.$data["pass"].'</br>';
	  		$handle=fopen('serial.txt','w');
	  		fwrite($handle,$buffer+1);
	  	}
	  	else
	  	{
	  		echo 'no new data'; 
	  	}

	}   




















	
?>