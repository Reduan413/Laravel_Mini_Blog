@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('All Post Blog') }}<br>
                    @foreach($posts as $post)
                    <h3> {{$post->title}}</h3>
                    <p>{{$post->body}}</p>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection