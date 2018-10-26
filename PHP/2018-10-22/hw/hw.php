<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"href="hw.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    <style>
    .tr:hover 
    {
        tr:hover {background-color: #ddd;}
    }
    </style>
</head>
<body>
   
<?php
$data = array(
    [
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
    ],
);
foreach($data as $ => $value)
{
    echo $value . "<br>";
}

   echo '<table border="1">';
    echo '<tr> ';      
    echo'       <th>#</th>';
    echo'       <th>type</th>';
    echo'       <th>price</th>';
    echo'       <th>made in</th>';
    echo' </tr>';

    //cach 1
    echo "<pre>";
        print_r($data);
        echo "<pre>";
    $id = 1;
    foreach($data as $Key => $value)
    {
        
        echo '<tr>    
                <td>' .$id .'</td>
                <td>'$Key .'</td>
                <td></td>
                <td></td>
            </tr>';
       $id++;
    }
    echo '</table>';


/*echo $made[$j]['in']; ?></td>
        <?php     }
        }?>
          
    </tr>
     
</table>


<table  style='width:100%'>
    <tr>
        <th> # </th>
        <th>Type </th>
        <th>Price</th>
        <th> Made in </th>
    </tr>
    <tr>
    $.each(data, function(index,value)
    {
        console.log(value);
    }
   
    </tr>
</table> -->
<?php
<table style='width:100%'>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>*/
?>
</body>
</html>