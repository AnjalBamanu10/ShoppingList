<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Log In</h1>

    @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif

    <form action="{{route('loginUser')}}" method="Post">
    @csrf
      
    <label for="">Email:</label>
    <input type="email" name="email" placeholder="enter your Email">
    <span>@error('name') {{$message}} @enderror</span>


    <label for="">Password:</label>
    <input type="password" name="password" >
    <span>@error('name') {{$message}} @enderror</span>

    

    <button type="submit">Log In</button>
</form>
</body>
</html>