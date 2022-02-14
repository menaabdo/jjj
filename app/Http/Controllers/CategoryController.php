<?php

namespace App\Http\Controllers;
use \App\Http\Requests\StorePostRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{ public function listapi()
    {
        $products = Category::all();
        // if()
        // {
           // return response()->json( $products);  // in json format
        // }
        // else{
        //     return response()->json( ['error' => 'Erorr from products']);  // in json format
        // }
        return response($products);
    
        

    }
    
    public function list()
    {
        // get list of the cateories 
        $categories = Category::paginate(5); // SELECT * from categories;
        $cat = Category::find(1);
        // $cat -> any_field_name = 'any value';
        return view('dashboard.pages.data',['categories'=>$categories ]);
    }
    public function deleteapi($slug){
        if(Category::find($slug))
        {$category = Category::find($slug);
            $category -> delete();
           // return response()->json( $category);
            return response($category);
    }}
    public function saveapi(Request $request){
       
         
        $category = new Category;
        $category -> name = 'name';
        $category->save(); 
    }
    public function updateapi(Request $request){
     $category=Category::find($request->id);
     $category->name=$request->name;
     $category->save(); 
        
    }

    public function create()
    {
        return view('category.create');
    }

    public function save(StorePostRequest  $request)
     {  
         $request->validated();
         
         $category = new Category;
         $category -> name = $request['name'];
         $category->save();
 
         $category=Category::all()->last();
         $category= Category::find($category->id);
         $category
 
    ->addMediaFromRequest('category_name')
    ->toMediaCollection();
 
         // $category = new Category;
         // $category -> name = $request['name'];
         // $category->save(); // INSERT INTO TABLE 
            
         return redirect()->route('category.list');
 
         // save new category
     }

    public function delete($slug)
    {  
    //    $category = Category::where('id','=', $id)->get(); 
    //     $category = Category::find($id);
    //     $cateogry = Category::whereId($id)->get();
       // $category = Category::findOrFail($slug);

        if(Category::find($slug))
        {$category = Category::find($slug);
            $category -> delete();
            return redirect()->route('categories.list');
        }
         else 
        ddd('not found');

       // return redirect()->route('categories.list');

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
