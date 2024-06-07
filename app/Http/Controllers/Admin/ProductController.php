<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $category =category::all();

        return view('admin.product.index',compact('category'));
    }
    public function add_product(Request $request){

        $product= new product;

        $product->category=$request->category;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product',$imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message','Product added successfully');
    }
    public function show_product(){
        
        $product=product::all();

        return view('admin.product.show',compact('product'));
    }


    
    public function user_product(){

        return view('admin.product.user');
    }
    public function delete_product($id){

        $product=Product::find($id);
    
        $product->delete();
    
        return redirect()->back()->with('message','Product deleted successfully');
    }
    
}
