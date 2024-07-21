<!doctype html>
<html lang="en">
<head>>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiến - CRUD - Laravel 11 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <!-- <a class="navbar-brand text-primary text-uppercase" href="/">Laravel 11</a> -->
            <a href="/">
            <div class="container_title">
                <!-- <a href="/"> -->
                    <img class="img" src="/logo_1.png"/>
                    <p>Huỳnh Vĩnh Tiến |</p>
                <!-- </a> -->
            </div>
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" id="href_students" href="{{ route('students.index') }}">Students</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container">
    @if( session()->has('success') )
        <div class="mt-5">
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="mt-5 bg-transparent">
        @yield('content')
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

        <style>
            .container_title{
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .img{
                width: 90px;
            }
            .container_title p{
                color: transparent;
                font-weight: bold;
                font-size: 40px;
                margin-bottom: 0px;
                margin-left: 5px;
                -webkit-text-stroke: .05rem white;
            }
            #href_students{
                color: transparent;
                font-weight: bold;
                font-size: 40px;
                margin-bottom: 0px;
                margin-left: 5px;
                -webkit-text-stroke: .05rem white;
            }
            a{
                text-decoration: none;
            }
            .container{
                margin-top: 100px;
            }
        </style>
</body>
</html>
