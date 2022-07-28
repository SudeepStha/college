@extends('frontend.app')

{{-- slide --}}
@section('slide')
    <div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('/image/1.png') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('/image/2.png') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('/image/3.png') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('/image/4.png') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('/image/5.png') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    
@endsection

{{-- content --}}
@section('content')
    <div class="py-5">
      <div class="container">
        <h1 class="text-primary">Our Faculty</h1>
        <table class="table table-hover table-warning">
          <tr class="table-primary">
            <th>#</th>
            <th>Faculty Name</th>
          </tr>

          @foreach ($faculties as $faculty)
          <tr>
            <td>{{ $faculty->id }}</td>
            <td><a href="/faculty/{{ $faculty->id }}">{{ $faculty->name }}</a></td>
          </tr>
              
          @endforeach
        </table>
        {!! $faculties->render('pagination::bootstrap-4') !!}
      </div>
    </div>
    
@endsection