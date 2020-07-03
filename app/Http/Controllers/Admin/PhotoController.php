<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Photo;
use App\Tag;
use App\Category;
use App\Taggable;
use App\Photo_descriptions;

class PhotoController extends Controller
{
    function index(){
   	$photos = Photo::all();
   	 foreach($photos as $photo){
   		$photo->category;
   	 	$photo->tags;
   	 	$photo->photo_descriptions;
   	}
   	//echo "<pre>".json_encode($photos,JSON_PRETTY_PRINT)."<pre>";
  return view('/photos/index',['photos'=> $photos]);
   }

    function addPhoto(){
   	 	$categories = Category::all();
   	 	$tags = Tag::all();
   	 	$photo_descriptions =Photo_descriptions::all();
   	return view('/photos/addPhoto',['categories'=> $categories],['tags'=>$tags],['photo_descriptions'=>$photo_descriptions]);
   }
 
 	function store(Request $request){

 	
 		$title = $request->input('title');
 		$image= $request->file('image')->store('public');
    $category = $request->input('category');
    $tags = $request->input('tags');
		$descriptions=$request->input('content');       
     
        
    $photos= new Photo;
    $photos->title=$title;
    $photos->image=$image;
    $photos->category_id=$category;

 		$photos->save();
 		$photo_descriptions = new Photo_descriptions;
 		$photo_descriptions->photo_id=$photos->id;
 		$photo_descriptions->content=$descriptions;
 		$photo_descriptions->save();


    for($i = 0 ;$i<count($tags);$i++){
    $taggable = new Taggable();
    $taggable->tag_id = $tags[$i];
    $taggable->photo_id = $photos->id;
    $taggable->save();
   }
   
    return redirect('photos/index');


 	}
  function editPhoto($id)
    {
        $photos = Photo::find($id);
        $decript = Photo_descriptions::find($id);
        return view('/photos/editPhoto',['photos'=>$photos],['photo_descriptions'=>$decript]);
    }


  	function delete($id){
        Photo_descriptions::where('photo_id',$id)->delete();
        Taggable::where('photo_id', $id)->delete();
        Photo::find($id)->delete();
        return redirect('/photos/index');
    }
   
}
