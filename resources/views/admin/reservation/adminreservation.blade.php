@extends('layouts.admin')

@section('title','Reservation')

@section('content')

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{url('admin/reservation/delete')}}" method="POST">
            @csrf
            @method('POST')
            <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Delete reservation </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="reservation_delete_id" id="reservation_id">
            <h5>Are You sure you want To delete This reservation ?</h5>
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
                    <h4> View Reservation Total ({{$reservation->count()}})</h4>
                    
            </div>
            <div class="card-body">

                <div class="table-responsive">
                        
                    <table id="catTable" class="table table-dark text-white table-stripe" >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer Name</th>
                                <th>Customer phone</th>
                                <th>Guests Number</th>
                                <th>Resrvation Date</th>
                                <th>Resrvation time</th>
                                <th>Resrvation Message</th>
                                <th>Created_at</th>
                                <th>Status</th>
                                <th>Updated_at</th>
                                <th>Edit</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservation as $reservationItem )
                                
                                <tr>
                                    <td>{{$reservationItem->id}}</td>
                                    <td>{{$reservationItem->name}}</td>
                                    <td>{{$reservationItem->phone}}</td>
                                    <td>{{$reservationItem->guests}}</td>
                                    <td>{{$reservationItem->date}}</td>
                                    <td>{{$reservationItem->time}}</td>
                                    <td>{{$reservationItem->message}}</td>
                                    <td>{{$reservationItem->created_at}}</td>
                                    <td>{{$reservationItem->status  }}</td>
                                    <td>{{$reservationItem->updated_at }}</td>
                                    <td>
                                        <a href="{{url('admin/reservation/edit/'.$reservationItem->id)}}" class="btn btn-info">Edit</a>
                                    </td>
                                    
                                    <td>
                                        {{-- <a href="{{url('admin/reservationItem/delete/'.$reservationItem->id)}}" class="btn btn-danger">Delete</a> --}}
                                        <button type="button" class="btn btn-danger deleteResBtn" value="{{$reservationItem->id}}">Delete</button>
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
            $(document).on('click','.deleteResBtn', function (e) {
            e.preventDefault();
            var reservation_id = $(this).val();
            $('#reservation_id').val(reservation_id);
            $('#deleteModal').modal('show');
        })
    })
</script>



@endsection