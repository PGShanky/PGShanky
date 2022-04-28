<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "william";
//create connection
$conn = new mysqli($servername, $username, $password, $database);
//connection test
if ($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
echo "Connection Successful";