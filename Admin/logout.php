<?php
@session_start();
if(!isset($_SESSION["user"]))
{
header('Location:login.php');
}
else if(isset($_GET["session"]))
{
	
	unset($_SESSION['user']);
	session_destroy();
	//header('Location:login.php');
	echo "<script>window.location.assign('login.php')</script>";

	}
	
?>