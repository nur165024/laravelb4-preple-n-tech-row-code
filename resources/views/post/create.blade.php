@extends('layouts.master')
@section('title', 'Create Post')

@section('content')
    <h1>Post Create</h1>
    <a class="btn btn-primary" href="#">Post List</a>
    <hr>
    <form action="{{ route('post.store') }}" method="post">

        @csrf

        <div class="form-group">
            <label">Enter Your Title</label>
            <input name="title" type="text" class="form-control" placeholder="Enter Your Title">
        </div>

        <div class="form-group">
            <label">Enter Your Title</label>
            <textarea name="details" class="form-control" placeholder="Details" rows="6"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
