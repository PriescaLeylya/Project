@extends('layouts.app') 
@section('content') 
    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-md-8"> 
                <div class="card"> 
                    <div class="card-header">{{ __('PAKET TOUR DATA') }}</div> 

                    <div class="card-body"> 
                        @if (session('status')) 
                            <div class="alert alert-success" role="alert"> 
                                {{ session('status') }} 
                            </div> 
                        @endif 

                        <center><img src="{{asset('storage/'.$tourtravels->photo)}}" width='300px'></center>

                        <form action="/tourtravels/{{$tourtravels->id}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$tourtravels->id}}"></br>
                            <div class="form-group">
                                <label for="Tujuan">Tujuan</label>
                                <input type="text" class="form-control" required="required" name="Tujuan" value="{{$tourtravels->Tujuan}}"></br>
                            </div>

                            <div class="form-group">
                                <label for="Destinasi">Destinasi</label>
                                <input type="text" class="form-control" required="required" name="Destinasi" value="{{$tourtravels->Destinasi}}"></br>
                            </div>

                            <div class="form-group">
                                <label for="Harga">Harga</label>
                                <input type="text" class="form-control" required="required" name="Harga" value="{{$tourtravels->Harga}}"></br>
                            </div>

                            <div class="form-group">
                                <label for="photo"> Photo</label>
                                <input type="file" class="form-control" required="required"  name="photo"></br>
                            <div>
                            <button type="submit" name="edit" class="btn btn-primary float-right">Submit</button>
                        </form>
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
@endsection 