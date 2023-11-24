@extends('layouts.master')

@section('content')
    <div class="card mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        Edit Posts
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{ route('post.index') }}" class="btn btn-success mx-1">Back</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="" class="form-label">Image</label>
                    <input type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Description</label>
                    <textarea class="form-control" cols="20", rows="5"></textarea>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
