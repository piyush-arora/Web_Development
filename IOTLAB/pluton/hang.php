<?php
ob_end_flush();
$redirect_page='https://appear.in/cloudlab';
header('Location:'.$redirect_page);
//use ob_end_clean to clean the buffer

?>