@extends('backend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/books" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    <form action="/books/{{ $book->id }}" method="post">
                        @csrf
                        @method('put')
                        {{-- ctrl+D garda kheri name haru dherai ota select hunxa --}}
                        {{-- alt+mouse click garda kheri nachaine ma select hatxa --}}
                        <div class="form-group">
                            <label for="name">Book Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $book->name }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Book Price</label>
                            <input id="price" class="form-control" type="text" name="price" value="{{ $book->price }}">
                        </div>
                        <div class="form-group">
                            <label for="author">Book Author</label>
                            <input id="author" class="form-control" type="text" name="author" value="{{ $book->author }}">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm mt-3">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection