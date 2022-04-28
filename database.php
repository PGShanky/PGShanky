<?php
$servername = "localhost";
$username = "root";
$password = "";
//create connection
$conn = new mysqli($servername, $username, $password);
//connection test
if ($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
echo "Connection Successful";

// creating a database
$sql = "CREATE DATABASE winnie";
if ($conn->query($sql) == TRUE){
    echo "Database created successfully";
} else {
    echo "Error Creating Database".$conn->error;
}
$conn->close();
?>