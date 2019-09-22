@extends('layouts.master')
@section('title', 'Edit Post')

@section('content')
    <h1>Edit Create</h1>
    <a class="btn btn-primary" href="{{ route('post.index') }}">Post List</a>
    <hr>
    <form action="{{ route('post.update',$post->id) }}" method="post">

        @csrf
        @method('put')

        <div class="form-group">
            <label">Enter Your Title</label>
            <input name="title" value="{{ $post->title }}" type="text" class="form-control" placeholder="Enter Your Title">
        </div>

        <div class="form-group">
            <label">Enter Your Title</label>
            <textarea name="details" class="form-control" placeholder="Details" rows="6">{{ $post->details }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
