<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apps lanka</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content container pt-3">
                <div class="jumbotron">
                    <h1 class="display-4">Hello, Apps Lanka!</h1>
                    <p class="lead">We offer customer desire based application.</p>
                    <hr class="my-4">
                    <p>Learning laravel is always fun</p>
                    <div class="links">
                    <a href="https://appslanka.lk">our website</a>
                    <a href="/home"></a>
                </div>
            </div>


            </div>
        </div>

        <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="home">home</a>
                  <a class="nav-link" href="about">About us</a>
                  <a class="nav-link" href="contact">Contact Us</a>
                </li>

        </ul>
    </body>
</html>
