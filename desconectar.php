<?php 
session_start();
if($_SESSION['user']){	
	session_destroy();
	header("location:Login.php");
}
else{
	header("location:Login.php");
}
?>