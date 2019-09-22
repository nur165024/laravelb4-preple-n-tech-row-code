@extends('layouts.master')
@section('title', 'Edit Post')

@section('content')
    <h1>Edit Create</h1>
    <a class="btn btn-primary" href="{{ route('post.index') }}">Post List</a>
    <hr>
    <form action="{{ route('post.update',$post->id) }}" method="post">

        @csrf
        @method('put')

        @include('post/_form')

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
