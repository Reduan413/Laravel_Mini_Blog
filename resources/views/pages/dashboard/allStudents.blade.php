@extends('layouts.admin.app')

@section('content')
<div class="">
    <div class="page-header d-flex justify-content-between page-header">
        <h5 class="header">{{ __('All Students') }}</h5>
        <div class="button">
            <a href="{{ route('student_create_index') }}" class="btn btn-success">Add New Student</a>
        </div>
    </div>
    <div class="row">
        @foreach ($students as $student)
        <div class="col-lg-3 col-md-3 col-12 mt-3">
            <div class="card">
                <img class="card-img-top" src="{{ url($student->image) }}" style="height:260px">
                <div class="card-body">

                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
