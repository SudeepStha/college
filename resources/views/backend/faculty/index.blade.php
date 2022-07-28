@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/faculty/create" class="btn btn-primary btn-sm">Add Faculty</a>
                    </div>
                    <div class="card-body">
                        {{-- datatable le table modify garxa, suru ma datatable implement garnu parxa --}}
                        <table class="table" id="datatable"> 
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Faculty Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faculties as $f)
                                    <tr>
                                        <td>{{ $f->id }}</td>
                                        <td>{{ $f->name }}</td>
                                        <td>
                                            <a href="/faculty/{{ $f->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
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