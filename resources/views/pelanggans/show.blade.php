@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PELANGGAN DATA DETAILS') }}</div>

                <div class="card-header">{{ $pelanggans->nama }}</div>
                    <div class="card-body">
                        Name : {{ $pelanggans->nama }} <br>
                        Jenis Kelamin : {{ $pelanggans->jenis_kelamin }} <br>
                        Phone Number : {{ $pelanggans->phone_number }} <br>
                        Alamat : {{ $pelanggans->alamat }} <br>
                        Tujuan Tour : {{ $pelanggans->tourtravels->Tujuan }} <br>
                        Tanggal Booking : {{ $pelanggans->tanggal_booking }}  
                        <br>
                        <br>
                        <center><img src="{{asset('storage/' .$pelanggans->tourtravels->photo)}}" width='250px'></center><br>
                        <center>Destinasi : {{ $pelanggans->tourtravels->Destinasi }}</center>
                        <br>

                        <a href="/pelanggans/{{$pelanggans->id}}/report" class="btn btn-primary" target="_blank">PRINT BOOKING</a>
                    </div>
                    
                </div> 
            </div>
          
        </div>
    </div>
</div>
@endsection