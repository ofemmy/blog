@extends('layout')

@section('content')
    <div class="row">
        @forelse($posts as $post)
            <div class="card text-white bg-primary mb-3 col-md-12" >
                <div class="card-header">{{$post->title}}</div>
                <div class="card-body">
                    <h4 class="card-title">{{$post->title}}</h4>
                    <p class="card-text">{{$post->body}}</p>
                </div>
        </div>
            @empty
            <p>No Posts Yet</p>
            @endforelse
    </div>

@endsection
