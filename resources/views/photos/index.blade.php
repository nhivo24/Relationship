<!DOCTYPE html>
<html>
<head>
	<title></title>
      <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container"> 
<table align="center" width="600px" border="1" cellspacing="0" cellpadding="3"
    class="table table-hover table-bordered">
  <tr class="table-primary table-header" style="text-align: center;">
  
    <th>Title</th>
    <th>Image</th>
    <th>Photo Description</th>
    <th>Category</th>
    <th>Tags</th>
    <th >Delete</th>
    
  </tr>
</thead>                
  @foreach($photos as $photo)  
    <div class="col-md-3">
   
         <tr><td> {{$photo->title}}</td>

              <td>  <img src="{{'/storage/'.$photo->image}}" style="height: 150px; width:200px;"></td>
               <td>{{$photo->photo_descriptions->content}}</td>
              <td> {{$photo->category->name}}</td>
              <td> 
                @foreach ($photo->tags as $item)
                         {{$item->name}}
                @endforeach
               
              </td>         
    </div>
              <td>                
                  @csrf
                  <a style="text-align: center;" href="/photos/index/{{$photo->id.'/editPhoto'}}" type="submit"class="btn btn-success">Edit</a>                
              </td>

              <td>
                <form action="{{'/photos/index/'.$photo->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button style="text-align: center; " type="submit" class="btn btn-danger">Delete</i>
                </button>
                </form>
              </td>
              </tr>
         @endforeach
    </div>


</body>
</html>