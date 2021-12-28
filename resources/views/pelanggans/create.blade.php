@extends('layouts.app') 
@section('content') 
    <div class="container">
        <div class="row justify-content-center"> 
            <div class="col-md-8"> 
                <div class="card"> 
                    <div class="card-header">{{ __('PELANGGAN DATA') }}</div> 

                    <div class="card-body"> 
                        @if (session('status')) 
                            <div class="alert alert-success" role="alert"> 
                                {{ session('status') }} 
                            </div> 
                        @endif 
                        
                        <form action="/pelanggans" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Name</label>
                                <input type="text" class="form-control" required="required" name="nama"></br>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" class="form-control" required="required" name="jenis_kelamin"></br>
                            </div>

                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control" required="required" name="phone_number"></br>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" required="required" name="alamat"></br>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_booking">Tanggal Booking</label>
                                <input type="text" class="form-control" required="required" name="tanggal_booking"></br>
                            </div>

                            <div class="form-group">
                                <label for="Tourtravel">Tujuan</label>
                                <select class="form-control" name="Tourtravel">
                                    @foreach($tourtravels as $s)
                                    <option value="{{$s->id}}">
                                    {{ $s->Tujuan }} 
                                    </option>
                                    @endforeach
                                </select></br>
                            </div> 
                            <button type="submit" name="add" class="btn btn-primary float-right">Submit</button>                    
                        </form> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
@endsection 