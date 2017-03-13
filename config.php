<?php 



$hostname = "localhost";
$username = "root";
$password = "";
$db = "my_project";

$conn = mysqli_connect($hostname,$username,$password) or die("Server Not Found!!!");

$db = mysqli_select_db($conn,$db) or die("DATABASE NOT FOUND!!!");


?>