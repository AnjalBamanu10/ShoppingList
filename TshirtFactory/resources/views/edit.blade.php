<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <h2 style="text-align: center;">T-Shirt Factory</h2>
      <div class="container p-5 my-5 border">
      <form action="{{route('saveData')}}" method="post">
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

      <button type="submit" class="btn btn-primary">Update</button>

        <br>
        <br>
      </div>

</body>
</html>