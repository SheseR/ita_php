@extends('layouts.app')

@section('content')
    <div class="card" style="width: 70rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $post->author }}</h6>
            <p class="card-text">{{ $post->text }}</p>
            <a href="{{ route('posts.edit', $post) }}" class="card-link">Edit Post</a>
            <a href="{{ url()->previous() }}" class="card-link">Go to List</a>
        </div>
    </div>

    <div class="list-group" style="width: 50rem;>
        @foreach($post->comments()->get() as $comment)
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                <div class="d-flex w-100 justify-content-between">
                    <small>{{ $comment->created_at }}</small>
                </div>
                <p class="mb-1">{{ $comment->text }}</p>
                <small>{{ $comment->user()->first()->name }}</small>
            </a>
        @endforeach
    </div>

@endsection
