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

                    <form action="{{url('admin/users/create')}}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name"  required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">PassWord</label>
                                <input type="text" name="password" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Role_as</label>
                                <select class="form-control" name="role_as" id="">
                                    <option value="1">Super Admin</option>
                                    <option value="0">Admin</option>
                                </select>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">status</label>
                                <input type="checkbox" name="status"   />
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