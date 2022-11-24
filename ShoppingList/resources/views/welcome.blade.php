<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping List</title>
    <link rel="stylesheet" href="cssfile/welcome.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="background">

   <div class="container w-25 mt-5">
      <div class="card shadow-sm">
        <div class="card-body">
           <h1>Shopping List</h1> 
          <form action="{{route('saveList')}}" method="Post" >
           @csrf
             <input type="text" class="form-control" placeholder="Add Shoppig items" name="list">
          
               <div class="input-group">
                 <button type="submit" class="btn btn-primary btn-sm px-3"><i class="fa fa-plus" style="font-size:22px"></i></button>
              </div>
          </form>
        </div>

      </div>
    

    <table class="list group list group flush mt-3">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Items</th>
      <th colspan="3">Action</th>
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
       
        </td>
    </tr>
    @endforeach
 
  </tbody>
</table
   </div>



    
</body>
</html>