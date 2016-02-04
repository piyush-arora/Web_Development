<?php

if(isset($_GET['my_data']))
{
	$file = fopen('my_file.txt', 'w');
	$data = $_GET['my_data'];
	$data=str_replace('var ', 'int ', $data);
	$handle=fopen('../../../serial.txt','r');//i want to write  use for a to append
   	$ser = fgets($handle, 10);
    fclose($handle);
   	$file=fopen('../../../my_json.php','w');
    fwrite($file,'{"ser":"');
    fwrite($file,$ser);
    fwrite($file,'","glo":"');
    fwrite($file,'');
    fwrite($file,'","set":"');
    fwrite($file,'init();');
    fwrite($file,'","loop":"');
    fwrite($file,$data);
    fwrite($file,'"}');
    fclose($file);
    $handle=fopen('../../../serial.txt','w');
    fwrite($handle,$ser+1);
    fclose($handle);
   
}



?>