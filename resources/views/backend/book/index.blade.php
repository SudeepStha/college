@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/books/create" class="btn btn-primary btn-sm">Create New Book</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Author</th>
                                <th>Action</th>
                            </tr>

                            @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->author }}</td>
                                <td>
                                    <a href="/books/{{ $book->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                                
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection