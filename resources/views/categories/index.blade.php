@extends('layouts.app')

@section('content')
    <div class="list-group">
        @foreach($categories as $category)
            <a href="#" class="list-group-item list-group-item-action active">
                {{ $category->name }}
            </a>
        @endforeach
    </div>
@endsection
