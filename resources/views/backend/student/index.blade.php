@extends('backend.app')

@section('content')
  <div class="container">
    <div class="row mt-3">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <a href="/students/create" class="btn btn-primary btn-sm ">Create New Student</a>
          </div>
          <div class="card-body">
            <table class="table">
              <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Student Name</th>
                <th>Age</th>
                <th>Roll No</th>
                <th>Mobile No</th>
                <th>Faculty</th>
                <th>Action</th>
              </tr>
  
              @foreach ($students as $student)
              <tr>
                <td>{{ $student->id }}</td>
                <td><img src="{{ asset($student->image) }}" alt="" width="50"></td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->roll }}</td>
                <td>{{ $student->mobile }}</td>
                <td>{{ $student->faculty->name }}</td>
                <td>
                    <form action="/students/{{ $student->id }}" method="post">
                      @csrf
                      @method('delete')
                      <a href="" class="btn btn-primary btn-sm">Show</a>
                      <a href="/students/{{ $student->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                      <button type="submit" class="btn btn-primary btn-sm">Delete</button>
                  
                  </form>
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