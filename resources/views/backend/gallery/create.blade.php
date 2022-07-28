@extends('backend.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/gallery" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="/gallery" method="post" enctype="multipart/form-data">
                @csrf
                {{-- bootstrap form group (bfg) for writing in the textbox  --}}
                <div class="form-group">
                    <label for="name">Gallery Name</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                {{-- bootstrap form file (bff) for selecting images in file --}}
                <div class="form-group my-2">
                    <label for="images">Upload Images</label>                           
                 {{-- multiple to choose multiple file in images --}}
                    <input id="images" class="form-control-file" type="file" name="images[]" multiple>
                </div>
                <button type="submit" class="btn btn-primary btn-sm my-3">Create Gallery</button>

                </form>
            </div>
        </div>
    </div>
    
@endsection