<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User Page</h1>

    <!--show all user-->
<!-- 
    <div>
    @foreach ($users as $user )
        id: {{$user->id}}<br/>
        name: {{$user->name}}<br/>
        email: {{$user->email}}<br/>
    @endforeach
    </div> -->
    <div>{{$users}}</div>
    <!-- gets the data thrown by controller  -->
</body>
</html>