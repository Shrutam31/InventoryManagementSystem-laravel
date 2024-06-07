<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index(){

    $data = category::all();

    return view('admin.category.index', compact('data'));
   }
   public function add_category(Request $request){

    $data=new category;
    $data->type=$request->type;
    $data->name=$request->name;
    $data->description=$request->description;
    $data->details=$request->details;

    $data->save();

    return redirect()->back()->with('message','Category added successfully');

   }
   public function delete_category($id){

    $data=category::find($id);

    $data->delete();

    return redirect()->back()->with('message','Category deleted successfully');
}
}
