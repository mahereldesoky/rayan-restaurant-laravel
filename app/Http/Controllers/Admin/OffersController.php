<?php

namespace App\Http\Controllers\Admin;

use App\Models\Offers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offers::all();
        return view('admin.offers.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offers = new Offers;
        $offers->name = $request->name;
        $offers->small_desc = $request->small_desc;
        $offers->status = $request->status == true ? '1':'0';

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/offers/', $filename);
            $offers->image = $filename;
        }
        $offers->save();
        return redirect('admin/offers')->with('message','offer Added Successfully');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($offer_id)
    {
        $offers = Offers::find($offer_id);
        return view('admin.offers.edit',compact('offers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $offer_id)
    {
        $offers = Offers::find($offer_id);
        $offers->name = $request->name;
        $offers->small_desc = $request->small_desc;
        $offers->status = $request->status == true ? '1':'0';

        if($request->hasfile('image')){
            $destination = 'uploads/offers/'.$offers->image ;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/offers/', $filename);
            $offers->image = $filename;
        }

        $offers->update();
        return redirect('admin/offers')->with('message','offer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request)
    {

        $offers = Offers::find($request->offer_delete_id);
        if($offers){
            $destination = 'uploads/offers/'.$offers->image ;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $offers->delete();
            return redirect('admin/offers')->with('message','offer Deleted Successfully');
        }else {
            return redirect('admin/offers')->with('message','No Post Id Found');
        }
    }
}
