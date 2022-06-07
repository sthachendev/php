<?php
include_once('connection.php');
//create database
$query = "CREATE DATABASE IF NOT EXISTS myDatabase";

if ($con->query($query)){
    echo "<br>Database created!";
}else{
    echo "<br>error creating database";
}
?>