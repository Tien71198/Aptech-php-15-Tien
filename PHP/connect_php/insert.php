<?php


$$servername = "localhost";
$username = "root";
$password = "";
$database ="aptech_php_15_ss4";

$conn = mysqli_connect($servername, $username, $password,$database);
/*
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
*/
$sql = "INSERT INTO users(name,email,password)
    VALUE ('an','an@gmail.com', '123456'),
    ('binh', 'binh@gmail.com', '123457'),
    ('hoa' , 'hoa@gmail.com' , '123458'),
    ('hong', 'hong@gmail.com', '123459'),
    ('vi', 'vi@gmail.com','123460')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>