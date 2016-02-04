<?php

if (!isset($_POST['old_login'])) 
{
    echo strtr(file_get_contents('templates/login_page.html'), array());

}

else if (isset($_POST['old_login'])) 
{
echo strtr(file_get_contents('templates/projects.html'), array());
 
}

?>