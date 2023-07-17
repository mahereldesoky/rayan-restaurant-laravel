<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offers;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $offers = Offers::all();

        $cold  = Category::where('status','0')->where('name', 'COLD DRINKS')->get();
        $hot  = Category::where('status','0')->where('name', 'HOT DRINKS')->get();
        $fresh  = Category::where('status','0')->where('name', 'FRESH JUICE')->get();
        $shake  = Category::where('status','0')->where('name', 'MILK SHAKE')->get();
        $soda  = Category::where('status','0')->where('name', 'SODA COKTIAL')->get();

        $main  = Category::where('status','0')->where('name', 'MAIN COURSE')->get();
        $children  = Category::where('status','0')->where('name', 'CHILDREN MEALS')->get();

        $products  = Products::where('status','0')->where('category_id', 'id')->get();

        return view('frontend.home',compact('cold','hot','fresh','shake','soda','main','children','products','offers'));

    }

    public function menu()
    {
        $breakfast  = Category::where('status','0')->where('name', 'BREAK FAST')->get();
        $sanwich  = Category::where('status','0')->where('name', 'SANDWICH')->get();
        $burger  = Category::where('status','0')->where('name', 'BURGER')->get();
        $hawashi  = Category::where('status','0')->where('name', 'HAWASHI')->get();
        $pasta  = Category::where('status','0')->where('name', 'PASTA')->get();
        $pizza  = Category::where('status','0')->where('name', 'PIZZA')->get();
        $main  = Category::where('status','0')->where('name', 'MAIN COURSE')->get();
        $children  = Category::where('status','0')->where('name', 'CHILDREN MEALS')->get();
        $soup  = Category::where('status','0')->where('name', 'SOUP')->get();
        $salad  = Category::where('status','0')->where('name', 'SALAD')->get();
        $appetizer  = Category::where('status','0')->where('name', 'APPETIZER')->get();
        $extras  = Category::where('status','0')->where('name', 'EXTRAS')->get();
        $deserts  = Category::where('status','0')->where('name', 'DESERTS')->get();
        $waffle  = Category::where('status','0')->where('name', 'WAFFLE')->get();
        $cold  = Category::where('status','0')->where('name', 'COLD DRINKS')->get();
        $hot  = Category::where('status','0')->where('name', 'HOT DRINKS')->get();
        $fresh  = Category::where('status','0')->where('name', 'FRESH JUICE')->get();
        $shake  = Category::where('status','0')->where('name', 'MILK SHAKE')->get();
        $soda  = Category::where('status','0')->where('name', 'SODA COKTIAL')->get();

        $products  = Products::where('status','0')->where('category_id', 'id')->get();

        return view('frontend.menu', compact('breakfast','products','sanwich','burger','hawashi','pasta','pizza','main',
            'children','soup','salad','appetizer','extras','deserts','waffle','cold','hot','fresh','shake','soda'
    ));

    }

    public function gallery()
    {
        return view('frontend.gallery');

    }


}
