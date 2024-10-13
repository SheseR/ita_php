@extends('layouts.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $post->author }}</h6>
            <p class="card-text">{{ $post->text }}</p>
            <a href="{{ route('posts.edit', $post) }}" class="card-link">Edit Post</a>
            <a href="{{ url()->previous() }}" class="card-link">Go to List</a>
        </div>
    </div>
@endsection
