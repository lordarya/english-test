<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar
        navbar-expand-md navbar-light bg-white shadow-lg">
        <div class="container">
            <a class="navbar-brand">
                <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="20"
                    alt="MDB Logo" />
                <small>English Test</small>
            </a>

            <div class="collapse navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <li class="dropdown">

                    <li class="nav-item dropdown">
                        <a class="dropdown d-flex align-items-center hidden-arrow nav-link" id="navbarDropdown"
                            href="#" role="button" style="text-decoration: none; color: black; font-size: 10pt;"
                            href="#" aria-expanded="false" data-bs-toggle="dropdown">
                            <img src="../dist/img/user.jpg" class="rounded-circle" height="40" />
                            <div class="d-sm-none d-lg-inline-block" style="padding-left: 5px;">
                                {{ Auth::user()->name }}</div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <main class="py-4">
        @yield('content')
    </main>

    </div>

    <!-- Copyright -->
    <div class="text-center p-3 bg-white shadow-lg" style="margin-top: 5px ;">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="#">English Test</a>
    </div>
    <!-- Copyright -->
    </div>

    <!-- jQuery -->

    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('dist/js/demo.js') }}"></script> --}}
</body>

</html>
