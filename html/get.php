<?php
/*
    echo "<h2 style ='color:blue'>Thanh cong<h2>";
    echo $_GET['email'];
    echo"<br>";
    echo $_GET['password'];
    echo"<br>";
    echo $_GET['gui'];
*/
/*
    if($_GET['email']==="abc@gmail.com" &&  $_GET['password']==="123456")
    {
        echo "Thanh cong ";
    }
    else
    {
      //  echo "dang nhap lai ";
      header('Location: ./form.php');
    }
    */

    if($_POST['email']==="abc@gmail.com" & $_POST['password']==="123456")
    {
        echo "<h3>Thanh cong <h3>";
    }
    else
    {
        header('Location: ./feedback.php');
    }
    
?>