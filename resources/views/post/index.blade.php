@extends('layouts.app')

@section('title', 'All Posts')


@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container">
    <div class="row">
        <div class="card-columns">
            @foreach ($posts as $index => $post)
                <div class="card">
                    <img class="card-img-top  img-fluid" height="230px"
                src="{{ $post->image ?? 'https://www.desktopbackground.org/p/2011/10/11/279567_wooden-desk-laptop-mouse-book-plant-phone-notebook-apple_2880x1800_h.jpg'}}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{!! Illuminate\Support\Str::limit($post->desc, 100, ' ...') !!}</p>
                    <a class="btn btn btn-outline-primary" href="{{ route('posts.show',$post->id) }}">Read more</a>
                </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
