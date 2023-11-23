@extends('layouts.master')

@section('content')
    <div class="card mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        All Posts
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="" class="btn btn-success mx-1">Create</a>
                        <a href="" class="btn btn-warning mx-1">Trashed</a>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="https://picsum.photos/200" alt="" width="80">
                        </td>
                        <td>Lorem, ipsum dolor.</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, nemo?</td>
                        <td>News</td>
                        <td>2-25-23</td>
                        <td>
                            <a href="" class="btn btn-sm btn-success">Show</a>
                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
