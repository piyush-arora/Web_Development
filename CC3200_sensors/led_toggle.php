<?php
if(isset($_POST['LED_ON']))
{
  $redirect_page='http://192.168.43.189/ON';
  header('Location:'.$redirect_page);

}
else if(isset($_POST['LED_OFF']))
{
  $redirect_page='http://192.168.43.189/OFF';
  header('Location:'.$redirect_page);

}
else
{
	echo strtr(file_get_contents('templates/led_toggle.html'), array());
}

?>