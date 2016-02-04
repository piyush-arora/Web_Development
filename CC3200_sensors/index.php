<?php

function escape($s) 
{
    return mysql_real_escape_string(strip_tags($s)); // uncomment in when you will use connection with database
  //  return strip_tags($s);
}

if (!isset($_POST['REGISTER'])&&!isset($_POST['LOGIN'])) 
{
	echo strtr(file_get_contents('templates/register_login.html'), array());

}

else if (isset($_POST['REGISTER'])) 
{
echo strtr(file_get_contents('templates/registeration_page.html'), array());
 
}
elseif (isset($_POST['LOGIN'])) 
{
  echo strtr(file_get_contents('templates/login_page.html'), array());

}
                

?>