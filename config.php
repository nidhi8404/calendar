<?php
$hostname = "localhost";
$username = "root";
$password = "";  
$database = "calendar";   

$conn= new mysqli($hostname,$username,$password,$database);  

if($conn -> connect_error) {
    die("Cannot connect to the database.". $conn->connect_error);
}  
?> 