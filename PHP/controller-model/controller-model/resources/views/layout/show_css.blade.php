<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
 <h1>hello</h1>
 <?php
echo "<table class='table table-hover table-bordered'>";
    echo "<thead><tr><th>id</th>";
    echo "<th>name</th>";
    echo "<th>email</th>";
    echo "</tr></thead>";
foreach($users as $users)
{ 
    echo "<tbody><tr><th>" . $users -> id . "</th>";
   
    echo "<td>" . $users->name . "</td>";
   
    echo "<td>" . $users->email . "</td>";
    echo "<td>" . $users->password . "</td></tr></tbody>";
    echo "<br>"; 
}
echo "</table>";
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>