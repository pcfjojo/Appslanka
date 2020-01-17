<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Appslanka - @yield('title')</title>

        <link href="{{ asset('css/app.css')}}" rel="stylesheet"
        type="text/css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body >
        <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="about">About us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact">Contact us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="teams">Our Team</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">Posts</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="/posts">All Posts</a>
                              <a class="dropdown-item" href="/posts/create">new post</a>
                            </div>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        Mail us - info@appslanka.lk
                    </span>
                </div>
        </nav>


        <div class="container mt-4">
            @yield('content')
        </div>

        <nav class="container navbar  navbar-light bg-light fixed-bottom">
                <a class="navbar-brand" href="#">All right reserved appslanka software solutions</a>
        </nav>

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
