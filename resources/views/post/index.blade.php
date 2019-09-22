@extends('layouts.master')
@section('title', 'Post Of List')

@section('content')
    <h1>Post Of List</h1>
    <a class="btn btn-primary" href="{{ route('post.create') }}">Post Create</a>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Sl</th>
                <th scope="col">Post Title</th>
                <th scope="col">Post Details</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->details }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('post.edit',$post->id) }}">Edit</a>

                        <a class="btn btn-sm btn-success" href="{{ route('post.show',$post->id) }}">Show</a>

                        <form class="d-inline" action="{{ route('post.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button onclick="confirm('you are sure')" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
