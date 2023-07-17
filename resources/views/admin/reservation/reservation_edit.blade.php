@extends('layouts.admin')

@section('content')
<div class="container px-4">
    <div class="row mt-4">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4> Edit Reservation
                    <a href="{{url('admin/reservation')}}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                
                <div class="card-body">

                    <form action="{{url('admin/reservation/update/'.$reservation->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">


                            <div class="col-md-6 mb-3">
                                <label for="">Customer Name</label>
                                <input type="text" name="name" value="{{$reservation->name}}" disabled class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Customer phone</label>
                                <input type="text" name="phone" value="{{$reservation->phone}}" disabled class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Customer email</label>
                                <input type="text" name="email" value="{{$reservation->email}}" disabled class="form-control">
                            </div>


                            <div class="col-md-6 mb-3">
                                <label for="">Guests Number</label>
                                <input type="text" name="guests" value="{{$reservation->guests}}" disabled class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Resrvation Date</label>
                                <input type="text" name="date" value="{{$reservation->date}}" disabled class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Resrvation time</label>
                                <input type="text" name="time" value="{{$reservation->time}}" disabled class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="">Resrvation Message</label>
                                <textarea name="message" id="" cols="30" rows="4" class="form-control" disabled>{{$reservation->message}}</textarea>
                            </div>

                            <div class="col-md-6 mb-3 ">
                                <label for="">Change Status</label>
                                <select name="status" class="form-control" id="">
                                    <option class="form-select" value="pending">Pending</option>
                                    <option class="form-select" value="confirmed">Confirmed</option>
                                    <option class="form-select" value="canceled">Canceled</option>
                                </select>
                                {{-- <input type="checkbox" name="status" {{$product->status ? 'checked':''}}  /> 
                                <span style="font-size: 12px">Checked = Hidden , Not Checked = Visible</span> --}}
                            </div>

                            <div class="col-md-6 mb-3">
                                <button type="submit"  class="btn btn-primary">Edit Reservation</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection