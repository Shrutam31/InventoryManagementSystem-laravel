<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Dispatch;

use App\Models\NewDispatch;

class DispatchController extends Controller
{
    public function view_dispatch(Request $request)
    {
        $product = Product::all();
      
        return view('admin.product.incoming', compact('product'));
    }

   

    public function dispatchProduct(Request $request)
    {
        // Retrieve the product ID from the request
        $productId = $request->input('product_id');

        // Find the product by ID
        $product = Product::find($productId);

        // Store the product data in the Dispatch table
        $dispatch = new NewDispatch;
        $dispatch->category = $product->category;
        $dispatch->name = $product->name;
        $dispatch->description = $product->description;
        $dispatch->price = $product->price;
        $dispatch->image = $product->image;
        $dispatch->save();

        // Optionally, you can delete the product from the original table
        // $product->delete();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Product dispatched successfully');
    }
}
