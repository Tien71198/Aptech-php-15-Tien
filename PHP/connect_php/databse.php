<?php

$$servername = "localhost";
$username = "root";
$password = "";
$database ="database";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "CREATE DATABASE aptech_php_15_ss4";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
/*
$sql = "create table users (
    id int primary key auto_increment ,
    name varchar(255),
    email varchar(255) unique,
    passwork varchar(255))";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}*/


mysqli_close($conn);
?>