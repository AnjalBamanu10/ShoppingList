<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
</head>
<body>

    <h1>Todo Application</h1>
    <form action="{{route('saveTodo')}}" method="post">
        @csrf
        <input type="text" name="todo">
        <button type="submit">Save</button>
    </form>

    <ul>
        @foreach($list as $value)
        <li>{{$value->Title}}</li>
        @endforeach
        
    </ul>
</body>
</html>