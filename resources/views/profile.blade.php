<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
    
    <h1>Profile</h1>
    <div>
        @foreach ( $profiles as $profile )
            <b>ID:</b> {{$profile->id}} <br/>
            <b>Name:</b> {{$profile->Name}} <br/>
            <b>Email:</b> {{$profile->Email}} <br/>
            <b>Birthdate:</b> {{$profile->Birthdate}} <br/>
            <b>Home Address:</b> {{$profile->Home_address}} <br/>
            <b>Contact Number:</b> {{$profile->Contact_number}} <br/>
            <hr>
        @endforeach
    </div>

   <!-- {{$profiles}}  -->
</body>
</html>