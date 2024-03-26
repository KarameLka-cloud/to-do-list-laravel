@extends('layouts.main')
@section('content')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <a href="{{ route('post.edit', $post) }}" class="btn btn-update">Update</a>
    <form action="{{ route('post.destroy', $post) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-delete">Delete</button>
    </form>
    <a href="{{ route('posts.index') }}" class="btn btn-back">Back</a>
@endsection
