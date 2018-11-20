<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action=""  method ="POST"> 
    Email: <input type="email" name="email" placeholder="Nhap email" >
    <br>
    Password: <input type="password" name="password" placeholder="Password">
    <br>
    Dang nhap: <input type="text" name="gui">
    <br>
     <button type="submit" name ="submit" value="submit">Dang  Nhap </button>
</form>

<?php

include'conn.php';
if(isset($_POST[submit]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
    $dangnhap = $_POST["gui"];
    if($email==""||$password==""||$dangnhap=="")
    {
        echo "<p>Hay dien day du thong tin <p?>";
    }
    else 
    {
        // in dữ liệu ra bên ngoài
        echo $email.'<br>'.$password.'<br>'.$dangnhap.'<br>';
        $sql = "INSERT INTO users('email','password','dangnhap') value('$email','$password','$dangnhap')";

        $query = mysql_query($conn,$sql);
        if (!$query) {
            echo "<p>Ban da dang nhap thanh cong</p>";
        }
         echo "Dang nhap that bai <br>";
    }x
}
?>
</body>
</html>