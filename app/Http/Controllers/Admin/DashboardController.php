<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()  {
        $users = User::all();
        $products = Products::latest()->where('status','0')->paginate(5);
        $productsShow = Products::latest()->where('status','0')->get();
        $categories = Category::latest()->where('status','0')->paginate(5);
        $categoryShow = Category::latest()->where('status','0')->get();
        $reservation = Reservation::latest()->where('status','pending')->get();
        $doneReservation = Reservation::latest()->where('status','confirmed')->get();
        return view('admin.dashboard' ,compact('users','products','categories','categoryShow','productsShow','reservation','doneReservation'));
    }
}
