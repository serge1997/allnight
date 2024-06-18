<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <!-- bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- icons -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <!-- css -->
        <link rel="stylesheet" href="/css/main.css">
        @yield('css-content')
        <!-- Jquery -->
         <!-- Jquery -->
         <script src="/js/jQuery/jquery-min-3-7.js"></script>
         <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white border p-4 shadow-sm position-relative">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto fw-medium">
                  <li class="nav-item">
                    <a class="nav-link text-dark" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Evento</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Category</a>
                  </li>
                </ul>
                <div style="width: 15%" class="d-flex justify-content-center">
                  <div class="btn-group">
                    <button class="btn btn-sm border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @guest<a class="text-dark" href=""><ion-icon name="person-outline"></ion-icon></a>@endguest
                        @auth {{ Auth::user()->name }} @endauth
                    </button>

                        <ul class="dropdown-menu border-0 shadow">
                            @auth
                                <li class="fw-normal">
                                    <a class="dropdown-item" href="{{ route('logout')}}">Adicionar imagens</a>
                                </li>
                                <li class="fw-normal">
                                    <a class="dropdown-item" href="{{ route('logout')}}">Sair</a>
                                </li>
                            @endauth
                            @guest
                                <li>
                                    <a class="dropdown-item" href="{{ route('login')}}">Login</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('auth.register')}}">Usuario</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('auth.establishment-register')}}">Parceria</a>
                                </li>
                            @endguest
                        </ul>

                  </div>
                </div>
              </div>
            </div>
        </nav>
        <div class="mt-4"></div>
        @yield('content')
        @yield('script-src-js')
        <script type="module" src="/js/main.js"></script>
    </body>
</html>
