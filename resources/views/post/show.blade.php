@extends('layouts.master')

@section('title', 'Post Details')

@section('content')
    <h1>Post Details</h1>
    <a class="btn btn-primary" href="{{ route('post.index') }}">Post Of List</a>
    <hr>
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->details }}</p>
@endsection
