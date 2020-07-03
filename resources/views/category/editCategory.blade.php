<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title></title>
</head>
<body>
 
  <div class="container" style="padding: 16px 18px;">
      <h1>Thêm Gì Đi</h1>
    <form action="/category/index/{{$categories->id}}" method="POST" enctype="multipart/form-data">
      @method('PATCH')
      @csrf
          <div class="form-group">
              <label  for="title">Name</label>
              <input type="text" class="form-control" name="name" value="{{$categories->name}}">
          </div>
          <button type="submit" class="btn btn-sucess">Submit</button>
      </form>
      
   
  </div>

</div>   
</body>
</html>