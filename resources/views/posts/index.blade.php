@extends('layouts.main')
@section('content')
    <a href="{{ route('post.create') }}" class="btn btn-create">Create post</a>
    @foreach($posts as $post)
        <a href="{{ route('post.show', $post) }}" class="post-list">- {{ $post->title }}</a>
    @endforeach
@endsection
