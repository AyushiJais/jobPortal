<?php
$servername = "localhost";
$username = "root";
$password = "PUJA";
$dbname = "jobportal";

//Create connection
$connect = new mysqli($servername , $username , $password , $dbname );

if($connect->connect_error){
    die("Connection Failed: " . $connect->connect_error);
}