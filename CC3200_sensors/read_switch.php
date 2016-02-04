<?php
if (condition) {
	
}
else
{
	$switch_value = file_get_contents('http://192.168.43.189/SWITCH');
	echo $switch_value;
	//echo strtr(file_get_contents('templates/led_toggle.html'), array());

}

?>