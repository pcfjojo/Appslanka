@extends('layouts.app')

@section('title', $post->title)


@section('content')
<div class="container">
    <div class="row center-content-align text-center">
        @if($post)

        <h5 class="p-3 display-3">{{ $post->title }}</h5>

        <img class="w-50 p-3"src="{{ $post->image ??
            'https://www.desktopbackground.org/p/2011/10/11/279567_wooden-desk-laptop-mouse-book-plant-phone-notebook-apple_2880x1800_h.jpg'}}"
                class="mr-3" alt="...">

        <div class="row">
            {!!$post->desc !!}
        </div>
        @endif
    </div>
</div>
@endsection
