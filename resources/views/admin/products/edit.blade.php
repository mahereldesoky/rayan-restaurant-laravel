@extends('layouts.admin')

@section('content')
<div class="container px-4">
    <div class="row mt-4">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4> Edit Product
                    <a href="{{url('admin/products')}}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                
                <div class="card-body">

                    <form action="{{url('admin/products/update/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <label for="">Category</label>
                                    <select name="category_id" class="form-control">
                                        @foreach ($category as $item)
                                            <option value="{{$item->id}}">{{$item->name }}</option>    
                                        @endforeach
                                    </select>
                            </div>


                            <div class="col-md-12 mb-3">
                                <label for="">Product Name</label>
                                <input type="text" name="name" value="{{$product->name}}" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <input type="text" name="description" value="{{$product->description}}" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">Price</label>
                                <input type="number" name="price" value="{{$product->price}}" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="">status</label>
                                <input type="checkbox" name="status" {{$product->status ? 'checked':''}}  /> 
                                <span style="font-size: 12px">Checked = Hidden , Not Checked = Visible</span>
                            </div>

                            <div class="col-md-6 mb-3">
                                <button type="submit"  class="btn btn-primary">Edit Product</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection