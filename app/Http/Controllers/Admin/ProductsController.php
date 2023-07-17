<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function index()  {
        $products = Products::all();
        return view('admin.products.index',compact('products'));
    }

    function create() {
        $category = Category::where('status','0')->get();
        return view('admin.products.create',compact('category'));
    }

    function store(Request $request)  {
        $products = new Products;
        $products->name = $request->name;
        $products->category_id = $request->category_id;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->status = $request->status == true ? '1':'0';

        $products->save();
        return redirect('admin/products')->with('message','Product Added Succssfully');

    }

    function edit($product_id)  {
        $product = Products::find($product_id);
        $category = Category::where('status','0')->get();
        return view('admin.products.edit',compact('product','category'));
    }

    function update(Request $request, $product_id)  {

        $products = Products::find($product_id);
        $products->name = $request->name;
        $products->category_id = $request->category_id;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->status = $request->status == true ? '1':'0';

        $products->update();
        return redirect('admin/products')->with('message','Product Updated Succssfully');
    }

    public function destroy(Request $request)
    {
        $products = Products::find($request->product_delete_id);
        if($products){
            // $category->products()->delete();
            $products->delete();
            return redirect('admin/products')->with('message','product deleted Successfully');
        }else {
            return redirect('admin/products')->with('message','No product Id Found');
        }
    }
}
