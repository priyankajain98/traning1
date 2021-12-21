<?php 
$user = 'root'; 
$password = '';  
$database = 'demo';  
$servername='localhost:8080'; 
$mysqli = new mysqli($servername, $user, $password, $database); 
if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
$sql = "SELECT * FROM emp ORDER BY ID "; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?> 
