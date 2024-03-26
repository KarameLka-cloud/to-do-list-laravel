@extends('layouts.main')
@section('content')
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" id="title" name="title">

        <label for="content">Content</label>
        <input type="text" id="content" name="content">

        <button type="submit" class="btn btn-create">Create</button>
        <a href="{{ route('posts.index') }}" class="btn btn-back">Back</a>
    </form>
@endsection
