@extends('frontend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset($photos->name) }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    
@endsection