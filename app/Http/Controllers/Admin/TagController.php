<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
	
   
   function index(){
   	$tags = Tag::all();
    foreach($tags as $tag){
   	  	$tag->name;
   	}
   	 //echo "<pre>".json_encode($tags,JSON_PRETTY_PRINT)."<pre>";
   return view('/tags/index',['tags'=> $tags]);
   }


   function addTags(){
   		$tags = Tag::all();
   		return view('/tags/addTags',['tags'=>$tags]);
   }

   function store(Request $request){

    $name = $request->input('name');
    $tags = new Tag;
    $tags->name=$name;


    $tags ->save();

   }

    function edit($id)
    {
        $tags = Tag::find($id);
        return view('tags.editTag',['tags'=>$tags]);
    }
    function update($id,Request $request)
    {  
    	
    $tags=  Tag::find($id);
    $name = $request->input('name');
    $tags->name = $name;      
    $tags->save();
    
    return redirect('/tags/index');
    }
  
   	function delete($id){
   		Tag::find($id)->delete();
   		 return redirect('/tags/index');
    }

}
