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

    public function delete_all_data()
    {
       $query="TRUNCATE TABLE ".TABLE_NAME;
       $run_query=mysql_query($query);
       if ($run_query) 
       {
         return 1;
       }
       else
        {
          return 0;
        }
    }

    public function insert_data($col1,$col2,$col3,$col4)
    {
      
       $query="INSERT INTO `my_table`(`id`, `time`, `user_name`, `pass_word`) VALUES ('','','$col3','$col4')";
       $run_query=mysql_query($query);
        if ($run_query==1) 
        {
          return 1;
       }     
       else
       {
          return 0;
       }


    }


    public function get_new_data($id)
    {
       $query="SELECT * FROM `my_table` WHERE `id` = $id";
       $run_query=mysql_query($query);
        if(!empty($run_query))
        {
            if(mysql_num_rows($run_query)>0)
            {
              $row=mysql_fetch_array($run_query);
              $program=array();
              $program["id"]=$row["id"];
              $program["time"]=$row["time"];
              $program["name"]=$row["user_name"];
              $program["pass"]=$row["pass_word"];
              return $program;

              //return mysql_num_rows($run_query);
                
            }


            
        }
            
       else
       {
          return 0;
       }


    }



}



?>