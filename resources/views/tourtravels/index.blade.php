@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
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
                    <form class="form" method="get" action="{{ route('search') }}">
                            <div class="form-group w-100 mb-3">
                                <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="search...">
                                <button type="submit" class="btn btn-primary mb-1">Search</button>
                            </div>
                    </form>
                <a href="/tourtravels/create" class="btn btn-primary">Add Data</a>
                <br>
              
        
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Tujuan</th>
                            <th>Destinasi</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tourtravels as $s)
                    <tr>
                        <td><img src="{{asset('storage/'.$s->photo)}}" width='120px'></td>
                        <td>{{ $s->Tujuan }}</td>
                        <td>{{ $s->Destinasi}}</td>
                        <td>{{ $s->Harga}}</td>
                        <td>
                        <form action="/tourtravels/{{$s->id}}" method="post">
                        <a href="/tourtravels/{{$s->id}}/edit" class="btn btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                         <button type="submit" name="delete" class="btn btn-danger">Delete</button>    
                         </form>       
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