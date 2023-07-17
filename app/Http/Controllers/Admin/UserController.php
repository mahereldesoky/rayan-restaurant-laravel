<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()  {
    $users = User::all();
    return view('admin.users.index',compact('users'));
    }

    public function create() {
        return view('admin.users.create');
    }
    
    public function store( Request $request) {
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->role_as = $request->role_as;
        $users->status = $request->status == true ? '1':'0';

        $users->save();

        return redirect('admin/users')->with('message','User Added Successfully');

    }

    
    public function edit($user_id) {
        $users = User::find($user_id);
        return view('admin.users.edit',compact('users'));
    }

    public function update( Request $request, $user_id) {

        $users = User::find($user_id); 
        if($users){
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->role_as = $request->role_as;
        $users->status = $request->status == true ? '1':'0';

        $users->update();
        return redirect('admin/users')->with('message','User Updated Successfully');
        }
    }
    
    function destroy($user_id)  {
        $users = User::find($user_id); 
        if($users){
            $users->delete();
            return redirect('admin/users')->with('message','User Deleted Successfully');
        }
    }
}
