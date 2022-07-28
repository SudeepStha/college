@extends('frontend.app')

@section('content')
    <div>
        <div class="container my-3 bg-primary text-white">
            <h5> Our Student Profile</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum adipisci hic aperiam autem ab qui quasi voluptatem officiis omnis! Doloribus quas minima aut eius assumenda iure dolore exercitationem error alias, impedit numquam quasi repudiandae corporis, nulla laborum officiis aperiam optio labore dolor tempora odit perferendis vel. Nihil nisi quas nobis.</p>
        </div>
    </div>
    <div class="py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach ($students as $student)
                    <div class="col-md-3 my-2">
                        <div class="d-flex bg-white shadow p-2">
                            <div>
                                <img src="{{ asset($student->image) }}" alt="" width="120">
                            </div>
                            {{-- mx vaneko left ra right tira --}}
                            {{-- my vaneko top ra bottom tira --}}
                            <div class="mx-2">
                            <address>
                                <strong>Name: </strong> {{ $student->name }}<br>
                                <strong>Faculty: </strong> {{ $student->faculty->name }}<br>
                                <strong>Mobile: </strong> {{ $student->mobile }}<br>
                            </address>
                            </div>
                            
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </div>
    
@endsection