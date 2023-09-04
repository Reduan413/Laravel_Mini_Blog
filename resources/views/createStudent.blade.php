@extends('layouts.app')

@section('content')
<div class="container">
    <div class="wrapper rounded bg-white">

        <div class="h3">Registration Form</div>
        @if(session()->has('status'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <form method="POST" action="{{ url('dashboard/create-student') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Profile Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="full_name">
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last_name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Birthday</label>
                    <input type="date" class="form-control" name="birthday">
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Gender</label>
                    <select id="sub" name="gender">
                        <option value="" selected hidden>Choose Option</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Phone Number</label>
                    <input type="tel" class="form-control" name="phone">
                </div>
            </div>
            <div class=" my-md-2 my-3">
                <label>Subject</label>
                <select id="sub" name="subject">
                    <option value="" selected hidden>Choose Option</option>
                    <option value="Maths">Maths</option>
                    <option value="Science">Science</option>
                    <option value="Social">Social</option>
                    <option value="Hindi">Hindi</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>
@endsection
