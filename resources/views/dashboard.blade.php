@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" style="width:15%">Name</th>
                                <th scope="col" style="width:25%">Title</th>
                                <th scope="col" style="width:45%">Body</th>
                                <th scope="col" style="width:15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->user->name }}</td>
                                <td> {{ $post->title }}</td>
                                <td> {{ $post->body }}</td>
                                <td class="d-flex" style="gap:10px">
                                    <a href="{{ url('/post/edit',$post->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ url('/post/delete',$post->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
