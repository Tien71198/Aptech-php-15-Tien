<?php

require 'select.php';
$conn = connectDatabase();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from users where email = '$email' and password = '$password'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    echo "Dang nhap thanh cong ";
}
else {
    echo "Dang nhap khong thanh cong";
}

?>