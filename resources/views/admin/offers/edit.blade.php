@extends('layouts.admin')

@section('content')
<div class="container px-4">
    <div class="row mt-4">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4> Edit Offer
                    <a href="{{url('admin/offers')}}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                
                <div class="card-body">

                    <form action="{{url('admin/offers/update/'.$offers->id)}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <label for="">Offer Name</label>
                                <input type="text" name="name" value="{{$offers->name}}" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Offer Description</label>
                                <input type="text" name="small_desc" value="{{$offers->small_desc}}" placeholder="Words Between 3 to 5 words" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Image</label>
                                <input type="file" name="image"  class="form-control">
                                <img src="{{url('uploads/offers/'.$offers->image)}}" width="80px" height="80px"  alt="">

                            </div>


                            <div class="col-md-12 mb-3">
                                <label for="">status</label>
                                <input type="checkbox" name="status" {{$offers->status ? 'checked':''}}  /> 
                                <span style="font-size: 12px">Checked = Hidden , Not Checked = Visible</span>
                            </div>



                            <div class="col-md-6 mb-3">
                                <button type="submit"  class="btn btn-primary">Edit Offer</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection