@extends('layouts.app')

@section('content')
    <form action="{{route('posts.update', $post)}}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
            @if($errors->has('title'))
                <small id="text-error" class="form-text text-muted">
                    {{ $errors->first->message }}
                </small>
            @endif
        </div>

        <div class="form-group">
            <label for="preview">Preview</label>
            <input type="text" class="form-control" name="preview" id="preview" value="{{ $post->preview }}">
            @if($errors->has('preview'))
                <small id="text-error" class="form-text text-muted">
                    {{ $errors->first('preview') }}
                </small>
            @endif
        </div>

        <div class="form-group">
            <label for="text">Text</label>
            <textarea class="form-control" name="text" id="text" rows="5">{{ $post->text }}</textarea>
            @if($errors->has('text'))
                <small id="text-error" class="form-text text-muted">
                    {{ $errors->first('text') }}
                </small>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
