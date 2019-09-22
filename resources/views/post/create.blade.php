@extends('layouts.master')
@section('title', 'Create Post')

@section('content')
    <h1>Post Create</h1>
    <a class="btn btn-primary" href="{{ route('post.index') }}">Post List</a>
    <hr>
    <form action="{{ route('post.store') }}" method="post">

        @csrf

        @include('post/_form')

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
