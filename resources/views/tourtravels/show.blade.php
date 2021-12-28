@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('TOURTRAVEL DATA DETAILS') }}</div>

                <div class="card-body">
                    <table class="table table-responsive">
                        <center><img src="{{asset('storage/' .$tourtravels->photo)}}" width='200px'></center>
                        <br>
                        <tr><th>Tujuan</th><th>:</th><td>{{ $tourtravels->Tujuan }}</td></tr>
                        <tr><th>Destinasi</th><th>:</th><td>{{ $tourtravels->Destinasi }}</td></tr>
                        <tr><th>Harga</th><th>:</th><td> {{ $tourtravels->Harga }}</td></tr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection