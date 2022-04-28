<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "students";
// create a connection
$conn = new mysqli($servername, $username, $password, $database);

//check conn

if ($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
echo "Connection Successful";
?>