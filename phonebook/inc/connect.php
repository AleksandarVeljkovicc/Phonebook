<?php 

$serverName = "localhost";
$userName = "root";
$password = "php";
$dbName = "phonebook";

$conn = mysqli_connect($serverName,$userName,$password,$dbName);

if(!$conn) {
	
	die("Connection failed " . mysqli_connect_error());
	
}

?>