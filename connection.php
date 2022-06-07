<?php
$host = "localhost";
$user = "root";
$password = "2020";

$con = new mysqli($host, $user, $password);

if ($con->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connection established";
}
?>