<?php

$serverName = 'localhost';
$dbUserName = 'root';
$password = '';
$dbName = 'crud_operation';
 
$con = new mysqli($serverName, $dbUserName, $password, $dbName);

if(!$con){
    die(mysqli_error($con));
}