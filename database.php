<?php 
$mydb="my_db";
$conn = mysqli_connect("localhost","root","",$mydb);
if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
   }

?>