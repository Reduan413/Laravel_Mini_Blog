@extends('layouts.frontend.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($students as $student)
        <div class="col-lg-3 col-md-3 col-12 mt-3">
            <div class="card">
                <img class="card-img-top" src="{{ url($student->image) }}">
                <div class="card-body">

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
