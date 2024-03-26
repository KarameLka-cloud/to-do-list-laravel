@extends('layouts.main')
@section('content')
    <form action="{{ route('post.update', $post) }}" method="post">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{ $post->title }}">
        <input type="text" name="content" value="{{ $post->content }}">
        <button type="submit" class="btn btn-edit">Edit post</button>
        <a href="{{ route('post.show', $post) }}" class="btn btn-back">Back</a>
    </form>
@endsection
