<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
	
   
   function index(){
   	$categories = Category::all();
    foreach($categories as $category){
   	$category->name;
   	}
   	//echo "<pre>".json_encode($category,JSON_PRETTY_PRINT)."<pre>";
   return view('/category/index',['categories'=> $categories]);

   }

    function addCategory(){
      $categories = Category::all();
      return view('category/addCategory',['categories'=>$categories]);
   }

   function store(Request $request){
    $name=$request->input('name');
    $categories = new Category;
    $categories->name=$name;
    $categories ->save();

   }
 function edit($id)
    {
        $categories = Category::find($id);
        return view('category.editCategory',['categories'=>$categories]);
    }
    function update($id,Request $request)
    {  
    $categories=  Category::find($id);
    $name = $request->input('name');
    $categories->name = $name;      
    $categories->save();
    return redirect('/category/index');
    }
  
   	function delete($id){
      Category::find($id)->delete();
       return redirect('/category/index');
    }

}
