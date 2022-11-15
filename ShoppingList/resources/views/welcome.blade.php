<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1>Shopping List</h1>

    <div class="add-box">
           
    <form action="{{route('saveList')}}" method="Post">
        @csrf
         <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Shopping List: </label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Add shopping Items" name="list">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
    </div>
    <br>
    <br>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Items</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($list as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->items}}</td>
        <td>
            <a href="{{url('/edit/'. $value->id)}}">Edit</a>
            <a href="{{url('/delete/'. $value->id)}}">Delete</a>
            <button type="submit">Update</button>
        </td>
    </tr>
    @endforeach
 
  </tbody>
</table

    
</body>
</html>