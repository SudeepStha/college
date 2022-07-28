@extends('backend.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/gallery" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="/gallery/{{ $gallery->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                {{-- bootstrap form group (bfg) for writing in the textbox  --}}
                <div class="form-group">
                    <label for="name">Gallery Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $gallery->name }}">
                </div>
                {{-- bootstrap form file (bff) for selecting images in file --}}
                <div class="form-group my-2">
                    <label for="images">Upload Images</label>                           
                                                                             {{-- multiple to choose multiple file in images --}}
                    <input id="images" class="form-control-file" type="file" name="images[]" multiple>
                </div>
                <button type="submit" class="btn btn-primary btn-sm my-3">Update Gallery</button>

                </form>

                <div class="my-2">
                    

                        @foreach ($galleries as $gallery)

                        <form action="/gallery/{{ $gallery->id }}" method="post">
                            @csrf
                            @method('delete')

                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $gallery->id }}"><img src="asset($gallery->name)" alt="" width="120"></a>   
                           
                        <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $gallery->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        
                                        <div class="modal-body">
                                            <img src="asset( $gallery->name )" alt="" class="img-fluid">
                                        </div>
                                        <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </form>
                        @endforeach
                    
                   
                </div>
            </div>
        </div>
    </div>
    
@endsection