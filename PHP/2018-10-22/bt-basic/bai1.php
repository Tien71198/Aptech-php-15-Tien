
        <?php 
        $txt = "Hello Tien";
        $x = 5;
        $y = 10.5;
        $z = null;

        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;
        echo "<br>";
        var_dump($y); // trả về giá trị và tên kiểu dữ liệu
        echo "<br>";
        var_dump($z);
        echo "<br>";
        echo  $x + $y ;

    function mytest()
    {
        $a = 5;
        echo "<p> variable x inside function is : $a</p>";
    }
    mytest();

    echo "<p style ='color:blue;'> variable x inside function is : $txt</p>";

    $b = "Learn PHP";
    print "<h2>" . $b . "</h2>";
    print $x + $y   ;
     echo "<br>";

    echo"do dai chuoi txt la: ";
    echo strlen($txt);
    echo "<br>";
    
    // đếm số từ tronh 1 chuỗi 
    echo str_word_count($txt) ;

    $age = array("peter"=>"35","Ben"=>"37","joe"=>"43");
    asort($age);
    foreach($age as $x => $x_value)
    {
        echo "Key = " . $x . ",value=".$x_value;
        echo "<br>";
    }
        ?>