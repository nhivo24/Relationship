<!DOCTYPE html>
<html lang="en">
<head>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>insertproduct</title>
</head>
<body>
 
  <div class="container" style="padding: 16px 18px;">
      <h1>Thêm Gi Do</h1>
    <form action="/admin/photos" method="POST" enctype="multipart/form-data">
      @csrf
          <div class="form-group">
              <label  for="title">Title</label>
              <input type="text" class="form-control" name="title">
          </div>
            <div class="form-group">
              <label  for="typeroom">Image</label>
              <input type="file" class="form-control" name="image" placeholder="">
          </div>
        <div class="form-group">
            <label  for="typeroom">Description</label>
            <input type="text" class="form-control" name="content" placeholder="">
        </div>

        <div class="form-group">
            <label  for="number">Category:</label>
            <select type="text" class="form-control" name="category" placeholder="">
             @foreach($categories as $categorie) 
             <option value="{{$categorie->id}}">{{$categorie->name}}</option>
             @endforeach
         </select>
        </div>

         <div class="form-group">
            <label  for="number">Tag:</label>
            <select type="text" class="form-control" placeholder=""name="tags[]" multiple>
             @foreach($tags as $tag) 
             <option value="{{$tag->id}}">{{$tag->name}}</option>
         @endforeach
         </select>
        </div>

          <button type="submit" class="btn btn-sucess">Submit</button>
      </form>
      
   
  </div>

</div>   
</body>
</html>