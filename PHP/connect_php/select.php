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

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "password: " . $password["password"].  "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>