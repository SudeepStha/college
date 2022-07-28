@extends('backend.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="/teachers" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <form action="/teachers" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input id="subject" class="form-control" type="text" name="subject">
                </div>
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input id="salary" class="form-control" type="text" name="salary">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile No</label>
                    <input id="mobile" class="form-control" type="text" name="mobile">
                </div>
        
                <button type="submit" class="btn btn-primary btn-sm mt-2">Save Record</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection