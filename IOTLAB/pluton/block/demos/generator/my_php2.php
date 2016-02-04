<?php

    
if(isset($_GET['my_data']))
{
	$data = $_GET['my_data'];
    $file=fopen('my_file.txt','w');
    fwrite($file,$data);
    fclose($file);	
   
}



?>