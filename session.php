<?php
session_start();
if(!isset($_SESSION['Logid'])){
$msg="invalid user";	    
		header('location:login.php?msg='.$msg);
}


?>