@extends('frontend.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($gallery as $gallery)
                <div class="col-md-3">
                    <h5><a href="/gallery/{{ gallery->id }}">{{ gallery->name }}</a></h5>
                </div>
                
            @endforeach
        </div>
    </div>
    
@endsection