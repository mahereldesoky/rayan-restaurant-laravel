@extends('layouts.admin')
@section('title','Categories')


@section('content')

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{url('admin/category/delete')}}" method="POST">
            @csrf
            @method('POST')
            <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Delete Category With Products</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="category_delete_id" id="category_id">
            <h5>Are You sure you want To delete This Category With All Products ?</h5>
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
                    <h4> View Categories
                    <a href=" {{url('admin/category/create')}}" class="btn btn-primary float-end">Add category</a>
                    </h4>
                    
            </div>
            <div class="card-body">

                <div class="table-responsive">
                        
                    <table id="catTable" class="table table-dark text-white table-stripe">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category )
                                
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->status == true ? 'hidden':'visible'}}</td>
                                    <td>
                                        <a href="{{url('admin/category/edit/'.$category->id)}}" class="btn btn-info">Edit</a>
                                    </td>
                                    
                                    <td>
                                        {{-- <a href="{{url('admin/category/delete/'.$category->id)}}" class="btn btn-danger">Delete</a> --}}
                                        <button type="button" class="btn btn-danger deleteCatBtn" value="{{$category->id}}">Delete</button>
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
            $(document).on('click','.deleteCatBtn', function (e) {
            e.preventDefault();
            var category_id = $(this).val();
            $('#category_id').val(category_id);
            $('#deleteModal').modal('show');
        })
    })
</script>



@endsection