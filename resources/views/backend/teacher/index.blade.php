@extends('backend.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/teachers/create" class="btn btn-primary btn-sm">Create New Teacher</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Salary</th>
                        <th>Mobile No</th>
                        <th>Action</th>
                    </tr>
        
                    @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->subject }}</td>
                        <td>{{ $teacher->salary }}</td>
                        <td>{{ $teacher->mobile }}</td>
                        <td>
                            <a href="/teachers/{{ $teacher->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                        
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
@endsection