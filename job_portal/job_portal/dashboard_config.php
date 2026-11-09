<?php
//connection with mysql
$host ="localhost";
$user="root";
$pass = "";
$db ="jobs_portal";
$conn = new mysqli($host,$user,$pass,$db);
if(!$conn){
  die("database connection failed : " . mysqli_connect_error());
    
}

?>