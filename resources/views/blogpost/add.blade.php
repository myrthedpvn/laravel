@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-danger text-white">
                    <h4 class="mb-0">Add New Blogpost</h4>
                </div>
                <div class="card-body">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach  
                            </ul>
                        </div>      
                    @endif
                    <form method="POST" action="{{route('blogposts.add.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="text-muted">Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-muted">Email</label>
                            <input type="email" name="email" class="form-control" />
                        </div>
                        </br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Add Contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection