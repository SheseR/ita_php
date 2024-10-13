@extends('layouts.app')

@section('content')
<div class="row">
    @foreach($posts as $post)
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->preview }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Read Post</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

{{ $posts->links('vendor.pagination.bootstrap-4') }}
@endsection
