@extends('backend.app')

@section('content')
    <div class="container">
        <a href="/gallery" class="btn btn-primary btn-sm"><i class="fas fa-chevron-circle-left"></i>Back</a>
        <h4>Gallery</h4>
        <div class="row">
            @foreach ($images  as $bhada)
            <div class="col-md-3 my-2">
                <img src="{{ asset($bhada->name) }}" alt="" class="img-fluid">
            </div>

            @endforeach
        </div>
    </div>
    
@endsection