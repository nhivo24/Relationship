<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>insertproduct</title>
</head>
<body>
 
  <div class="container" style="padding: 16px 18px;">
      <h1>Thêm Gi Do</h1>

    <form action="" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
          <div class="form-group">
              <label  for="title">Title</label>
              <input type="text" class="form-control" name="title" value="{{$photos->title}}">
          </div>
            <div class="form-group">
              <label  for="typeroom">Image</label>

              <input type="file" class="form-control" name="image" placeholder="" >
              <img src="/storage/{{$photos->image}}">
          </div>
        <div class="form-group">
            <label  for="typeroom">Description</label>
            <input type="text" class="form-control" name="content" placeholder=""value="{{$decript->content}}">
        </div>

        <div class="form-group">
            <label  for="number">Category:</label>
            <input type="text" class="form-control" name="category" placeholder="" value="{{$photos->category}}">
  
        </div>

         <div class="form-group">
            <label  for="number">Tag:</label>
            <input type="text" class="form-control" name="tags[]" placeholder="" value="{{$photos->tags}}">
        </div>

          <button type="submit" class="btn btn-sucess">Submit</button>
      </form>
      
   
  </div>

</div>   
</body>
</html>