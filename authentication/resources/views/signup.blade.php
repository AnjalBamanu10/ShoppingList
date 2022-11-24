<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>

    @if(Session::has('fail'))
    <span>{{Session::get('fail')}}</span>
    @endif
    
    <form action="{{route('signupUser')}}" method="Post">
        @csrf
        <label for="">Name:</label>
        <input type="text" name="name" placeholder="enter your Firstname">
        <span>@error('name') {{$message}} @enderror</span>
      

        <label for="">Email:</label>
        <input type="email" name="email" placeholder="enter your email">
        <span>@error('email') {{$message}} @enderror</span>

        <label for="">Password:</label>
        <input type="password" name="password">
        <span>@error('password') {{$message}} @enderror</span>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>