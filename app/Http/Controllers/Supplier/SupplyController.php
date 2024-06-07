<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\NewDispatch;

use App\Models\ReturnProduct;

class SupplyController extends Controller
{
    public function index(){

        $category =category::all();

        return view('supplier.index',compact('category'));
    }
   
    public function show_dispatched_products(){
        
        $product=NewDispatch::all();

        return view('user.dispatched',compact('product'));
    }
    public function show_sent_products(){
        
        $product=NewDispatch::all();

        return view('user.sent',compact('product'));
    }
    public function return_supply(){
        
        $product=NewDispatch::all();

        return view('supplier.return_supply',compact('product'));
    }
    public function returnProduct(Request $request)
    {
        // Retrieve the product ID from the request
        $productId = $request->input('product_id');

        // Find the product by ID
        $product = NewDispatch::find($productId);

        // Store the product data in the return table
        $dispatch = new ReturnProduct;
        $dispatch->category = $product->category;
        $dispatch->name = $product->name;
        $dispatch->description = $product->description;
        $dispatch->price = $product->price;
        $dispatch->image = $product->image;
        $dispatch->save();

        // Optionally, you can delete the product from the original table
        $product->delete();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Product Dispatched successfully');
    }
    public function show_returned_products(){
        
        $product=ReturnProduct::all();

        return view('supplier.returned',compact('product'));
    }
   
}
