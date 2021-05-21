<?php 
session_start();
$con = mysqli_connect("localhost","mywonder_myshopdb","Cisco_0213","mywonder_myshopdb");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL : " . mysqli_connect_error();
}
?>
