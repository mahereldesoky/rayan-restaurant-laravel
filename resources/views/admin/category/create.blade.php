@extends('layouts.admin')

@section('content')
<div class="container px-4">
    <div class="row mt-4">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4> Add Category
                    <a href="{{url('admin/category')}}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                
                <div class="card-body">

                    <form action="{{url('admin/category/create')}}" method="POST" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <label for="">Category Name</label>
                                <input type="text" name="name" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">status</label>
                                <input type="checkbox" name="status"  /> <span style="font-size: 12px">Checked = Hidden , Not Checked = Visible</span>
                            </div>

                            <div class="col-md-6 mb-3">
                                <button type="submit"  class="btn btn-primary">Add Category</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection