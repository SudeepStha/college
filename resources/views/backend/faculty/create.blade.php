@extends('backend.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/faculty" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="my-2">{{ session('message') }}</div>
                        @endif
                        <form action="/faculty" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Faculty Name</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm mt-3">Save Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection