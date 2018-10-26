<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php

$data = array  (
        'type' => 'iphone',
        'property' => [
            'price' => 100,
            'size' => 6.5,
            'ram' => '2 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    [
        'type' => 'ipad',
        'property' => [
            'price' => 190,
            'size' => 7.9,
            'ram' => '4 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ]
    );
   
    foreach($data as $type =>$value)
    {
        echo("<br> " .$type .":" .$value);
    }




$dataa = array("a","b","c","d");

   // echo("<br> Type: " .$dataa[1] );


print_r($dataa);
echo "<br>";
if(!empty($dataa))
{
    foreach($dataa as $key => $value)
    {
        echo $value . "<br />";
    }
}

   echo '<table border="1">';
    echo '<tr> ';      
    echo'       <th>#</th>';
    echo'       <th>type</th>';
    echo'       <th>price</th>';
    echo'       <th>made in</th>';
    echo' </tr>';

    //cach 1
    $id = 1;
    foreach($data as $key=> $type[1])
    {
        echo '<tr>    
                <td>' .$id .'</td>
                <td>'.$key .'</td>
                <td>'.$key .'</td>
                <td></td>
            </tr>';
       $id++;
    }


    //cach 2  ----.$key .
    foreach($dataa as $key =>$name)
        {
            echo '<tr>    
                    <td>' .($key +1) .'</td> 
                    <td>'.$name .'</td>
                    <td>'.$name .'</td>
                    <td>'.$name .'</td>
                </tr>';
            $key++;
         }

    echo '</table>';


    ?>
</body>
</html>
   