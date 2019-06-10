<?php 
$servername = "localhost";
$username =  "root";
$password = "";
$DBname = "owanbe";
// create connection
$conn = mysqli_connect($servername, $username, $password, $DBname);
//check connection
if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}
//time formate
function formatDate($date){
	return date('F j, Y, g:i a', strtotime($date));
}
 ?>