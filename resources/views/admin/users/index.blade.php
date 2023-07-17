@if(Auth::user()->role_as == '1') 

@extends('layouts.admin')

@section('title','Users')


@section('content')

<div class="container px-4 py-4">


    <div class="row mt-4">
        <div class="col-md-12">

            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4> View Users
                    <a href=" {{url('admin/users/create')}}" class="btn btn-primary float-end">Add User</a>
                    </h4>
                    
            </div>
            <div class="card-body">

                <div class="table-responsive">
                        
                    <table id="myTable" class="table table-dark text-white table-stripe">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                                
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        {{$user->role_as == '1' ? 'Super admin':'Admin'}}
                                    
                                    </td>
                                    <td>{{$user->status == true ? 'hidden':'visible'}}</td>
                                    <td>
                                        <a href="{{url('admin/users/edit/'.$user->id)}}" class="btn btn-info">Edit</a>
                                    </td>
                                    
                                    <td>
                                        <a href="{{url('admin/users/delete/'.$user->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                    
                                </tr>

                        </tbody>
                        @endforeach
                    </table>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@else 
@section('content')

<div class="container px-4 py-4 ">

    <div class="row mt-4">
        <div class="col-md-12">

            
            <div class="card bg-danger ">

                <div class="card-body">
                    <h4 class="text-white">    You are  not authenticated to Access This page    </h4>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@endif