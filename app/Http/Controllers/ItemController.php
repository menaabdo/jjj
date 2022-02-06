<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    //

    public function show()
    {
        // get list of the cateories 
        $items = Item::all(); // SELECT * from categories;
        //$cat = Item::find(1);
        // $cat -> any_field_name = 'any value';
        return view('category.item',['items'=>$items ]);
    }
public function showItem($category_id){
$items=DB::table('items')->select('id','name','des')->where('category_id', $category_id)->get();
$cat=DB::table('categories')->select('name')->where('id', $category_id)->get();

    return view('category.oneitem',['items'=>$items],['cat'=>$cat]);


}
public function createitem()
    {
        return view('category.createitem');
    }

    // public function saveitem(Request $request)
    // {
    //     $item = new Item;
    //     $item -> name = $request -> name;
    //     $item -> price = $request -> price;
    //     $item -> price = $request -> price;
    //     $category->save(); // INSERT INTO TABLE 
        
    //      return redirect()->route('categories.list');
    //     // save new category
    // }


}
