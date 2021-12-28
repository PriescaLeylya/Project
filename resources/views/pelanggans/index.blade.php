@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
            <br><br>

                <div class="card-header">{{ __(' DATA TOURTRAVEL') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!--Search-->
                    <form class="form" method="get" action="{{ route('cari') }}">
                            <div class="form-group w-100 mb-3">
                                <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="search...">
                                <button type="submit" class="btn btn-primary mb-1">Search</button>
                            </div>
                    </form>
                    <a href="/pelanggans/create" class="btn btn-primary">Add Booking</a>
                    <br>
                    <br>
                        
                <table class="table table-responsive table-striped" >
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>jenis_kelamin</th>
                            <th>phone_number</th>
                            <th>alamat</th>
                            <th>Tujuan Tour</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pelanggans as $s)
                    <tr>
                        <td>{{ $s->nama}}</td>
                        <td>{{ $s->jenis_kelamin }}</td>
                        <td>{{ $s->phone_number}}</td>
                        <td>{{ $s->alamat}}</td>
                        <td>{{ $s->tourtravels->Tujuan}}</td>
                        <td>  
                        <form action="/pelanggans/{{$s->id}}" method="post">
                        <a href="/pelanggans/{{$s->id}}" class="btn btn-info">View</a>
                    
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