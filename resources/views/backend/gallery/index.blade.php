@extends('backend.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/gallery/create" class="btn btn-primary btn-sm">Add Gallery</a>
            </div>
            
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gallery Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($gallery as $gallery)
                            <tr>
                                <td>{{ $gallery->id }}</td>
                                <td>{{ $gallery->name }}</td>
                                <td>
                                    <a href="/gallery/{{ $gallery->id }}">Show</a>
                                    <a href="/gallery/{{ $gallery->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection