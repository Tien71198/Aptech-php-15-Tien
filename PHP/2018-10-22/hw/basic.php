<!DOCTYPE html>
<html>

<body>
    <?php
    echo"<h1>Hello world</h1>";
    echo"<h3>Tao trang web ban hoa phong lan </h3>";

    echo "<a href=\"./\">BACK </a><br>";
    echo ("<a href ='http://localhost/Aptech-php-15-Tien/PHP/2018-10-22/hw/'>GO BACK</a> <br>");
    print_r ("Thanh cong <br>");

    $myname = 'Nguyễn Thị Tiến';
    $myProject = 'web hoa phong lan <br>';
    echo "$myname - $myProject";

    define("my_name","NGUYEN THI TIEN", TRUE);
    define("NAME","QUẢ TÁO",TRUE);
    echo"<br>";
    echo my_name;
    echo "<br><br>".NAME;
    ?>
</body>
</html>