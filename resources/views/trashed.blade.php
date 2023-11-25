@extends('layouts.master')

@section('content')
    <div class="card mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        Trashed Posts
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{ route('post.index') }}" class="btn btn-success mx-1">Back</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 10%">Image</th>
                        <th scope="col" style="width: 20%">Title</th>
                        <th scope="col" style="width: 30%">Description</th>
                        <th scope="col" style="width: 10%">Category</th>
                        <th scope="col" style="width: 10%">Publish Date</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="{{ asset($post->image) }}" alt="" width="80">
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->category_id }}</td>
                            <td>{{ date('d-m-y', strtotime($post->created_at)) }}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-success">Show</a>
                                <a href="" class="btn btn-sm btn-primary">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
