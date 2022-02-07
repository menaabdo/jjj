<?php

namespace App\Http\Controllers;
use \App\Http\Requests\StorePostRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{ 
    public function list()
    {
        // get list of the cateories 
        $categories = Category::all(); // SELECT * from categories;
        $cat = Category::find(1);
        // $cat -> any_field_name = 'any value';
        return view('category.list',['categories'=>$categories ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function save(StorePostRequest  $request)
     {  $old=$request->name;
         $request->validated();
         
        $category = new Category;
        $category -> name = $request -> name;
        $category->save(); // INSERT INTO TABLE 
        
         return redirect()->route('categories.list');
        // save new category
    }

    public function delete($id)
    {  
       // $category = Category::where('id','=', $id)->get(); 
        // $category = Category::find($id);
        // $cateogry = Category::whereId($id)->get();
        $category = Category::findOrFail($id);

        if($category)
        {
            $category -> delete();
        }

        return redirect()->route('categories.list');

    }
    public function edit($id)
    {         
        
         
        return view('category.edit',['id'=>$id]);
        
    }
  public function update(Request $request){
    $category = Category::findOrFail($request['id']);
    if($category)
        {
            
            $category -> name = $request -> name;
            $category->save(); 
            return redirect()->route('categories.list');

        }

    }
}
