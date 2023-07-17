@extends('layouts.admin')
@section('title','Offers')

@section('content')

<!-- Modal -->
<div class="modal fade" id="deleteOFfModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{url('admin/offers/delete')}}" method="POST">
            @csrf
            @method('POST')
            <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Delete Offer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="offer_delete_id" id="offer_id">
            <h5>Are You sure you want To delete This Offer ?</h5>
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
                    <h4> View Offers
                    <a href=" {{url('admin/offers/create')}}" class="btn btn-primary float-end">Add Offer</a>
                    </h4>
                    
            </div>
            <div class="card-body">

                <div class="table-responsive">
                        
                    <table id="myTable" class="table table-dark text-white table-stripe">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($offers as $offer )
                                
                                <tr>
                                    <td>{{$offer->id}}</td>
                                    <td>{{$offer->name}}</td>
                                    <td>{{$offer->small_desc}}</td>
                                    <td>
                                        <img src="{{url('uploads/offers/'.$offer->image)}}" width="50px" height="50px" style="border-radius: 50%" alt="">
                                    </td>
                                    <td>{{$offer->status == true ? 'hidden':'visible'}}</td>
                                    <td>
                                        <a href="{{url('admin/offers/edit/'.$offer->id)}}" class="btn btn-info">Edit</a>
                                    </td>
                                    
                                    <td>
                                        {{-- <a href="{{url('admin/offers/delete/'.$offer->id)}}" class="btn btn-danger">Delete</a> --}}
                                        <button type="button" class="btn btn-danger deleteOffBtn" value="{{$offer->id}}">Delete</button>
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

@section('scripts')

<script>
    $(document).ready(function(){
        // $('.deleteCatBtn').click(function(e) {
            $(document).on('click','.deleteOffBtn', function (e) {
            e.preventDefault();
            var offer_id = $(this).val();
            $('#offer_id').val(offer_id);
            $('#deleteOFfModal').modal('show');
        })
    })
</script>

@endsection