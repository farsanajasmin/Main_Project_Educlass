<?php
$username="root";  
$password="";  
$hostname = "localhost";  
//connection string with database  
$db = mysqli_connect($hostname, $username, $password)  
or die("Unable to connect to MySQL");  
echo "";  
// connect with database  
$selected = mysqli_select_db($db, "educlass")  
or die("Could not select examples");  

?>