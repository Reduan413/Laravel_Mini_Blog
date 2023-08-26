@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('All Blogs') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:20%">Name</th>
                                <th scope="col" style="width:30%">Title</th>
                                <th scope="col" style="width:50%">Body</th>
                                <!-- <th scope="col" style="width:15%">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->user->name}}</td>
                                    <td> {{ $post->title }}</td>
                                    <td> {{ $post->body }}</td>
                                    <!-- <td>
                                        <button type="button" class="btn btn-info">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </td> -->
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <div class="d-flex">
                        {!! $posts->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
