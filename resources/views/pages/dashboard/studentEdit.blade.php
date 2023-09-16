@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="wrapper rounded bg-white">

        <div class="h3">Update Form</div>
        @if(session()->has('status'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('status') }}!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <form method="POST"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                @if ($student->image != '' && file_exists(public_path($student->image)))
                <div class="upload-image" style="width: 200px">
                    <img src="{{ url($student->image) }}" style="width:100%" />
                </div>
                @endif
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Profile Image</label>
                    <input type="file" class="form-control" name="image" value="{{ $student->image }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="full_name" value="{{ $student->full_name }}">
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="{{ $student->last_name }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Birthday</label>
                    <input type="date" class="form-control" name="birthday" value="{{ $student->birthday }}">
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Gender</label>
                    <select id="sub" name="gender" value="{{ $student->gender }}">
                        <option value="" selected hidden >Choose Option</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                </div>
                <div class="col-md-6 mt-md-0 mt-3">
                    <label>Phone Number</label>
                    <input type="tel" class="form-control" name="phone" value="{{ $student->phone }}">
                </div>
            </div>
            <div class=" my-md-2 my-3">
                <label>Subject</label>
                <select id="sub" name="subject" value="{{ $student->subject }}">
                    <option value="" selected hidden>Choose Option</option>
                    <option value="Maths">Maths</option>
                    <option value="Science">Science</option>
                    <option value="Social">Social</option>
                    <option value="Hindi">Hindi</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update student</button>
        </form>

    </div>
</div>
@endsection
