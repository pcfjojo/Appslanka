<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Appslanka - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body >
        <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="about">About us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="contact">Contact us</a>
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

        <nav class="container navbar  navbar-light bg-light">
                <a class="navbar-brand" href="#">All right reserved appslanka software solutions</a>
        </nav>
    </body>
</html>
