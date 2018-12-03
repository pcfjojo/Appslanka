@extends('layouts.app')

@section('title', 'Home page')


@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">       
          <h1 class="display-4">Welcome to {{ $company }}</h1>
          <p class="lead">{{ $tagline }}.</p>

          @if ($hour < 12)
            <div class="alert alert-success" role="alert">
                <p class="lead">Hi, Good morning</p>
            </div>
          @else
            <p class="lead">Hi, Good day</p>
          @endif
        </div>
    </div>


    {{-- Cards --}}
    <div class="card-deck">
            <div class="card">
              <img class="card-img-top" height="230px" src="https://www.desktopbackground.org/p/2011/10/11/279567_wooden-desk-laptop-mouse-book-plant-phone-notebook-apple_2880x1800_h.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Mobile Applications dev</h5>
                <p class="card-text">We makes andriod, IOS, Widows and Cross Platforms apps using latest trends.</p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" height="230px" src="data:image/jpeg;base64,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" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Web Applications dev</h5>
                <p class="card-text">We are specialzed makeing web applications using laravel, angular, vue js etc..</p>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" height="230px" src="https://www.livemint.com/rf/Image-621x414/LiveMint/Period2/2016/09/07/Photos/Leisure/Bollead-kbhE--621x414@LiveMint.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">SEO and More</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
            </div>
          </div>
@endsection