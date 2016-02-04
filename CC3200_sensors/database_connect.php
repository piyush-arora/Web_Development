<?php
class database_connect
{
    public function __construct()
    {
      $this->Connect();
    }
    public function __destruct()
    {
     $this->Disconnect();
    }
    public function Connect()
    {
      require_once 'database_variables.php';
      $connect=mysql_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD);
      if(!$connect)
      {
       die('fail to connect to server');

      }
      else
      {
       //echo 'SUCCESSFULLY CONNECTED TO SERVER.... '.DATABASE_HOST.'<BR>';
       $database=mysql_select_db(DATABASE_NAME);

          if(!$database)
          {
              die('fail to connect to database');

          }
          else
          {
              //echo 'SUCCESSFULLY CONNECTED TO DATABASE....'.DATABASE_NAME.'<BR>';
              
          }
       }

    }
    public function Disconnect()
    {
          mysql_close();
    }

}



?>