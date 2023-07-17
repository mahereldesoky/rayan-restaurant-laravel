@extends('layouts.admin')

@section('content')
<div class="container px-4">
    <div class="row mt-4">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4> Add User
                    <a href="{{url('admin/users')}}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                
                <div class="card-body">

                    <form action="{{ url ('admin/users/update/'.$users->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{$users->name}}"  required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{$users->email}}"  required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">PassWord</label>
                                <input type="text" name="password" value="{{$users->password}}"  required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Role_as</label>
                                <select class="form-control" name="role_as"  id="">
                                    <option  selected hidden value="{{$users->role_as}}"  >
                                        {{ $users->role_as == '1' ? 'Super Admin' : 'Admin'}}
                                    </option>
                                    <option value="1">Super Admin</option>
                                    <option value="0">Admin</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">status</label>
                                <input type="checkbox" name="status"   {{$users->status ? 'checked':''}}  /> Checked=Hidden,Notchecked=visible
                                
                            </div>



                            <div class="col-md-6 mb-3">
                                <button type="submit"  class="btn btn-primary">Add User</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection