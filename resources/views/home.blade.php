@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{session('error')}}
            </div>
        @endif
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Dashboard</h3>
                        <a href="{{route('blogposts.add')}}" class="btn btn-primary">Create new blog</a>
                    </div>
                </div>
                <div class="card-body">
                    @if(count($blogposts))
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Author</th>
				    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogposts as $blogs)
                                <tr>
                                    <td>{{$blogs->title}}</td>
                                    <td>{{$blogs->content}}</td>
				    <td>{{$blogs->author}}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </td> 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                     {{$blogposts->links()}}
                    @else
                        <p>No contacts found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection