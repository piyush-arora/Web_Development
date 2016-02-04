<?php

//responce form JSON
$response=array();
// name , price , description are the columns name
if(isset($_POST['name'])&&isset($_POST['price'])&&isset($_POST['description']))
{
   $name=$_POST['name'];
   $price=$_POST['price'];
   $description=$_POST['description'];

   // connect the database
    require_once 'database_connect.php';
   $db=new Database_Connect();
   $insert_query="INSERT INTO `products`(`pid`, `name`, `price`, `description`, `created_at`, `updated_at`) VALUES ('','$name','$price','$description','','')";
   $run_query=mysql_query($insert_query);

   if($run_query)
   {
      $response["success"]=1;
      $response["message"]="Product Successfully Created!!!!";
      $encoded_json=json_encode($response);
      echo $encoded_json;

   }
   else
   {
     $response["success"]=0;
     $response["message"]="Fail to insert product!!!!!";
     $encoded_json=json_encode($response);
     echo $encoded_json;

   }

}
else
{
 $response["success"]=0;
 $response["message"]="Some Fields Are EMPTY!!!!";
 $encoded_json=json_encode($response);
 echo $encoded_json;

}

?>