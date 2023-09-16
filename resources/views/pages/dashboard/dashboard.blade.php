@extends('layouts.admin.app')

@section('content')
<div class="">
    <div class="page-header d-flex justify-content-between page-header">
        <h5 class="header">{{ __('Dashboard') }}</h5>
    </div>
    <div class=" justify-content-center">
        <div class="mt-5">
            {{-- <h1>All Post</h1> --}}
            <div class="row">
                <div class="col-lg-3">
                    <div class="card text-center bg-secondary text-white">
                        <div class="card-body">
                            <h3 class="card-title">All Posts</h3>
                            <h1 class="card-text">{{ count($allPosts) }}</h1>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center bg-warning">
                        <div class="card-body">
                            <h3 class="card-title">My Postes</h3>
                            <h1 class="card-text">{{ count($posts) }}</h1>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center bg-success text-white">
                        <div class="card-body">
                            <h3 class="card-title">All Students</h3>
                            <h1 class="card-text">{{ count($allStudents) }}</h1>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="card text-center bg-info">
                        <div class="card-body">
                            <h3 class="card-title">My added Students</h3>
                            <h1 class="card-text">{{ count($Students) }}</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
