@extends('backend.app')

@section('content')
<div class="row">
  <div class="col-md-12">
    @if (session('message'))
      <div class="my-2 alert alert-success alert-sm">{{ session('message') }}</div>
        
    @endif
      <div class="card">
        <div class="card-header">
          <a href="/students" class="btn btn-primary btn-sm">Back</a>
        </div>
        <div class="card-body">
          <form action="/students/{{ $student->id }}" method="post">
            @csrf
            @method('put')
              <div class="form-group">
                  <label for="name">Full Name</label>
                  <input id="name" class="form-control" type="text" name="name" value="{{ $student->name }}">
              </div>
    
              <div class="form-group">
                  <label for="age">Age</label>
                  <input id="age" class="form-control" type="number" name="age" value="{{ $student->age }}">
              </div>
    
              <div class="form-group">
                  <label for="roll">Roll No</label>
                  <input id="roll" class="form-control" type="number" name="roll" value="{{ $student->roll }}">
              </div>
    
              <div class="form-group">
                  <label for="mobile">Mobile No</label>
                  <input id="mobile" class="form-control" type="tel" name="mobile" value="{{ $student->mobile }}">
              </div>

              <div class="form-group">
                <label for="faculty_id">Select Faculty</label>
                <select id="faculty_id" class="form-control" name="faculty_id">
                  @foreach ($faculties as $f) 
                  {{-- yedi yo faculty($f) ko id equal student($student) ko id xa vane selected garne natra khali dhekhaune --}}
                      <option value="{{ $f->id }}" {{ $f->id == $student->faculty_id ? 'selected' : '' }}>{{ $f->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="image">Upload Photo</label>
                <input id="image" class="form-control-file" type="file" name="image">
              </div>
    
              <button type="submit" class="btn btn-primary btn-sm mt-4">Save Record</button>
          </form>

          <div class="py-2">
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $student->id }}"><img src="{{ asset($student->image) }}" alt="" width="150"></a>


              <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      
                      <div class="modal-body">
                        <img src="{{ asset($student->image) }}" alt="" class="img-fluid">
                      </div>
                      
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
  </div>
</div>
    
@endsection