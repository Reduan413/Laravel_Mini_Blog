@extends('layouts.admin.app')

@section('content')
<div class="">
    <div class="page-header d-flex justify-content-between page-header">
        <h5 class="header">{{ __('All Students') }}</h5>
        <div class="button">
            <a href="{{ route('student_create_index') }}" class="btn btn-success">Add New Student</a>
        </div>
    </div>
    @if(session('status'))
        <div class="alert alert-success m-3" role="alert">
            {{ session('status') }}
        </div>
        @endif
    <div class="row">

        @foreach ($students as $student)
        <div class="col-lg-3 col-md-3 col-12 mt-3">
            <div class="card">
                <img class="card-img-top" src="{{ url($student->image) }}" style="height:260px">
                <div class="card-body">

                    <p><b>Name:</b> {{ $student->full_name }} {{ $student->last_name }}</p>
                    <p><b>Email:</b> {{ $student->email }} </p>
                    <p><b>Gender:</b> {{ $student->gender }}</p>
                    <p><b>Birhday:</b>{{ \Carbon\Carbon::parse($student->birthday)->format('j F Y') }}</p>
                    <p><b>Phone:</b> {{ $student->phone }}</p>
                    <p><b>Subject:</b> {{ $student->subject }}</p>

                    <div class="" style="gap:10px">
                        <a href="{{ url('dashboard/student/edit',$student->id) }}" class="btn btn-info d-block my-2">Edit</a>
                        <a href="{{ url('dashboard/student/delete',$student->id) }}" class="btn btn-danger d-block">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
