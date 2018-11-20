<h1>hello</h1>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<table class='table table-hover table-bordered' style ='width=100%'>
<thead>
<tr>
    <th> id</th>
    <th> Name</th>
    <th> email</th>
     <th> password</th>
    <th> Action</th>
</tr>
</thead>
<tbody>
<!--
    <tr>
        <th>{{$users[0] -> id }} </th>
        <td>{{$users[0] -> name }} </td>
        <td>{{$users[0] -> email }} </td>
        <td>{{$users[0] -> password }} </td>
    </tr>
    <tr>
        <th>{{$users[1] -> id }} </th>
        <td>{{$users[1] -> name }} </td>
        <td>{{$users[1] -> email }} </td>
        <td>{{$users[1] -> password }} </td>
    </tr>
    <tr>
        <th>{{$users[2] -> id }} </th>
        <td>{{$users[2] -> name }} </td>
        <td>{{$users[2] -> email }} </td>
        <td>{{$users[2] -> password }} </td>
    </tr>
    <tr>
        <th>{{$users[3] -> id }} </th>
        <td>{{$users[3] -> name }} </td>
        <td>{{$users[3] -> email }} </td>
        <td>{{$users[3] -> password }} </td>
    </tr>
    <tr>
        <th>{{$users[4] -> id }} </th>
        <td>{{$users[4] -> name }} </td>
        <td>{{$users[4] -> email }} </td>
        <td>{{$users[4] -> password }} </td>
    </tr>
    <tr>
        <th>{{$users[5] -> id }} </th>
        <td>{{$users[5] -> name }} </td>
        <td>{{$users[5] -> email }} </td>
        <td>{{$users[5] -> password }} </td>
    </tr>
    <tr>
        <th>{{$users[6] -> id }} </th>
        <td>{{$users[6] -> name }} </td>
        <td>{{$users[6] -> email }} </td>
        <td>{{$users[6] -> password }} </td>
    </tr>
 -->
    @foreach($users as $users)
    
        <tr>
            <td>{{$users->id}}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->password}}</td>
            <td>
                <button class='btn btn-danger'>show</button>
                <button class='btn btn-warning'>edit</button>
                <button class='btn btn-danger'>delete</button>
            </td>
        </tr>
    
    @endforeach

</tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>