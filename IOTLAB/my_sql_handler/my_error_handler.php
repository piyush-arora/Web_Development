<?php
set_error_handler('handle_my_error',E_ALL);

function handle_my_error($number,$text,$my_file,$line)
{
	if (ob_get_length()) 
	{
		ob_clean();
	}


	$error_message = 'Sorry Piyush Bhai ... :'.'</br>'.
					 'Error hai --->'.$text .'</br>'.
			         'file hai--->'.$my_file . '</br>'.
			         'line hai--->'.$line ;
			          
    echo $error_message;
}


?>