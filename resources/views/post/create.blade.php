<!-- this line extends dedault master/layout page which inside layouts.app -->
@extends('layouts.app')

@section('title', 'Create new post')


@section('content')
<div class="jumbotron jumbotron-fluid border-3">
    <div class="container">
        <h1 class="display-4 text-primary">Create Article</h1>

        <form method="POST" action="/posts">
            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <textarea  type="text" class="form-control" name="desc"
                id="exampleInputEmail1" aria-describedby="emailHelp">
                </textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Image Url</label>
                <input type="url" class="form-control" name="image"
                id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>


        </form>

    </div>
</div>
@endsection
