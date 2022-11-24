<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirt Factory</title>
    <link rel="stylesheet" href="css/welcome.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    
</head>
<body>
    <h1>T-Shirt Factory</h1>
    <div class="container p-5 my-5 border">
    <form action="{{route('saveData')}}" method="Post">
        @csrf
        <div class="row g-3 align-items-center">
           <div class="col-auto">
              <label  class="col-form-label">Batch No. :</label>
           </div>
          <div class="col-auto">
              <input type="text"  class="form-control" aria-describedby="passwordHelpInline" name="batch">
         </div>
      </div>
      <br>

      <div class="row g-3 align-items-center">
           <div class="col-auto">
              <label  class="col-form-label">Quantity:</label>
           </div>
          <div class="col-auto">
              <input type="text"  class="form-control" aria-describedby="passwordHelpInline" name="quantity">
         </div>
      </div>
      <br>

      <div class="row g-3 align-items-center">
           <div class="col-auto">
              <label class="col-form-label">Manufacture Date:</label>
           </div>
          <div class="col-auto">
              <input type="text"  class="form-control" aria-describedby="passwordHelpInline" name="mfd">
         </div>
      </div>
      <br>

      <div class="row g-3 align-items-center">
           <div class="col-auto">
              <label class="col-form-label">Status:</label>
           </div>
          <div class="col-auto">
              <input type="text"  class="form-control" aria-describedby="passwordHelpInline" name="status">
         </div>
      </div>
      <br>

      <div class="row g-3 align-items-center">
           <div class="col-auto">
              <label class="col-form-label">Remarks:</label>
           </div>
          <div class="col-auto">
              <input type="text"  class="form-control" aria-describedby="passwordHelpInline" name="remarks">
         </div>
      </div>
      <br>

        <button type="submit" class="btn btn-dark">Search</button>
        <br>
        <br>
        </form>
   
   </div>

   <div class="container p-5 my-5 bg-dark text-white">
       
   <table class="table">
          <thead>
            <tr>
            <th>Batch No.</th>
            <th>Quantity</th>
            <th>MFD</th>
            <th>Status</th>
            <th>Remarks</th>
            <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
          @foreach ($batch as $value)
          <tr>
            <td>{{$value->Batch}}</td>
            <td>{{$value->Quantity}}</td>
            <td>{{$value->MFD}}</td>
            <td>{{$value->Status}}</td>
            <td>{{$value->Remarks}}</td>
            <td> <a href="{{url('/edit/'. $value->id)}}"><button type="button" class="btn btn-info">Edit</button></a></td>
            <td><a href="{{url('/delete/'. $value->id)}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
          </tr>
          @endforeach
        </tbody>

</table>
   </div>




</body>
</html>