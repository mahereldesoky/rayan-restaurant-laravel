<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category;

        $category->name = $request->name;
        $category->status = $request->status == true ? '1':'0';
        $category->save();

        return redirect('admin/category')->with('message','category Added Successfully');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $category_id)
    {
        $category = Category::find($category_id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $category_id)
    {
        $category = Category::find($category_id);
        if($category){

            $category->name = $request->name;
            $category->status = $request->status == true ? '1':'0';
            $category->update();

            return redirect('admin/category')->with('message','category Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $category = Category::find($request->category_delete_id);
        if($category){
            $category->products()->delete();
            $category->delete();
            return redirect('admin/category')->with('message','category deleted Successfully');
        }else {
            return redirect('admin/category')->with('message','No Category Id Found');
        }
    }

}
