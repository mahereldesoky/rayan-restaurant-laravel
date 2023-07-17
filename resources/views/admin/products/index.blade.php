@extends('layouts.admin')

@section('title','Products')


@section('content')

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{url('admin/products/delete')}}" method="POST">
            @csrf
            @method('POST')
            <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Delete Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="product_delete_id" id="product_id">
            <h5>Are You sure you want To delete This Product ?</h5>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Yes,Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<div class="container px-4 py-4">


    <div class="row mt-4">
        <div class="col-md-12">

            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4> View Products
                    <a href=" {{url('admin/products/create')}}" class="btn btn-primary float-end">Add Product</a>
                    </h4>
                    
            </div>
            <div class="card-body">

                <div class="table-responsive">
                        
                    <table id="myTable" class="table table-dark text-white table-stripe">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>price</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product )
                                
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->status == true ? 'hidden':'visible'}}</td>
                                    <td>
                                        <a href="{{url('admin/products/edit/'.$product->id)}}" class="btn btn-info">Edit</a>
                                    </td>
                                    
                                    <td>
                                        {{-- <a href="{{url('admin/product/delete/'.$product->id)}}" class="btn btn-danger">Delete</a> --}}
                                        <button type="button" class="btn btn-danger deleteProdBtn" value="{{$product->id}}">Delete</button>
                                    </td>
                                    
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
    $(document).ready(function(){
        // $('.deleteCatBtn').click(function(e) {
            $(document).on('click','.deleteProdBtn', function (e) {
            e.preventDefault();
            var product_id = $(this).val();
            $('#product_id').val(product_id);
            $('#deleteModal').modal('show');
        })
    })
</script> 

@endsection