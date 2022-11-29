<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <header id="header" class="fixed-top">
            <nav class="navbar navbar-dark bg-dark bg-opacity-75">
                <div class="container-fluid">
                    <h1 class="satisfy-font"><a href="{{ url('/') }}">Tast<i class="fa-solid fa-seedling"></i>Recipes</a></h1>
                    <!-- Authentication Links -->
                    @guest
                        <div class="top-0 right-0">
                            @if (Route::has('login'))
                                <a class="navbar-brand" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            @endif

                            @if (Route::has('register'))
                                <a class="navbar-brand" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                            @endif
                        </div>
                        @else
                        <a class="navbar-brand" href="#" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                            @if (Auth::user()->avatar)
                                <img src="{{ asset('images/avatars/' . Auth::user()->avatar) }}" alt="avatar"
                                    class="rounded-circle icon img-fluid">
                                @else 
                                <i class="fa-solid fa-circle-user iconDefault"></i>
                            @endif
                            <span class="px-1">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                            aria-labelledby="offcanvasDarkNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/') }}">
                                            {{ __('Welcome') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}">
                                            {{ __('Home') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('aboutUs') }}">
                                            {{ __('About us') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('recipes.create') }}">
                                            {{ __('Create a recipe') }}
                                        </a>
                                    </li>
                                    @if (count(Auth::user()->roles) && Auth::user()->roles[0]->role == 'Admin')
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/recipe') }}">
                                                {{ __('ADMIN RECIPE') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/category') }}">
                                                {{ __('ADMIN CATEGORY') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/difficulty') }}">
                                                {{ __('ADMIN DIFFICULTY') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/role') }}">
                                                {{ __('ADMIN ROLES') }}
                                            </a>
                                        </li>
                                    @endif
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endguest
                </div>
            </nav>
        </header>
        <main class="">
            @yield('content')
        </main>

        <footer class="text-center marginFooter text-lg-start text-muted">
            <section class="border-top margin">
                <div class="container text-center text-md-start mt-5">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mb-4">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <h3 class="satisfy-font">Tast<i class="fa-solid fa-seedling"></i>Recipes<i class="las la-wine-glass-alt"></i></h3>
                            </a>
                            <p>We strive to provide you with the best International dining experiences.</p>
                            <div>
                                <span>Get connected with us on social networks: </span>
                                <a href="https://twitter.com/" class="social mx-1"><i
                                        class="fa-brands fa-twitter"></i></a>
                                <a href="https://it.blogup.io/t/messenger-it/" class="social mx-1"><i
                                        class="fa-brands fa-facebook-messenger"></i></a>
                                <a href="https://www.instagram.com/" class="social mx-1"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.facebook.com/" class="social mx-1"><i
                                        class="fa-brands fa-facebook"></i></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">
                                Category food
                            </h6>
                            <p class="text-reset">Appetizers</p>
                            <p class="text-reset">First Courses</p>
                            <p class="text-reset">Main Courses</p>
                            <p class="text-reset">Desserts</p>
                            <p class="text-reset">Latest Recipes</p>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                            <p><i class="lar la-envelope"></i> tastyrecipes@info.com</p>
                            <a href="https://twitter.com/" class="social mx-1"><i
                                    class="fa-brands fa-twitter"></i></a>
                            <a href="https://it.blogup.io/t/messenger-it/" class="social mx-1"><i
                                    class="fa-brands fa-facebook-messenger"></i></a>
                            <a href="https://www.instagram.com/" class="social mx-1"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.facebook.com/" class="social mx-1"><i
                                    class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                © 2022 Copyright:
                <a class="text-reset fw-bold" href="{{ url('/') }}">TastyRecipes.com</a>
            </div>
        </footer>

    </div>

</body>

</html>
