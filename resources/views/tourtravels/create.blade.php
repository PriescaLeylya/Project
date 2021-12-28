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
                        
                        <form action="/tourtravels" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="Tujuan">Tujuan</label>
                                <input type="text" class="form-control" required="required" name="Tujuan"></br>
                            </div>
                            <div class="form-group">
                                <label for="Tujuan">Destinasi</label>
                                <input type="text" class="form-control" required="required" name="Destinasi"></br>
                            </div>
                            <div class="form-group">
                                <label for="Harga">Harga</label>
                                <input type="text" class="form-control" required="required" name="Harga"></br>
                            </div>
                            <div class="form-group">
                                <label for="photo"> Photo</label>
                                <input type="file" class="form-control" required="required"  name="photo"></br>
                            <div>
                            <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                        </form> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
@endsection 