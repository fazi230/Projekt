<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                     integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/utilities.css">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="container flex">

            <a href="{{ url('/') }}" class="logo">{{ config('app.name', 'Songerr') }}</a>

            <form action="search" method="GET" name="search_form">
                <input id="pasek" type="text" size="50" name="searchFor" value="" pattern="[0-9a-zA-Z\s]{3,}" title="Zapytanie wyszukiwania powinno mieć conajmniej 3 znaki!"/>
                <button id="przycisk" class="btn szukaj" type="submit"><i class="fas fa-search"></i></button>
            </form>

            <nav>
                <ul>
                    @guest
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li><a href="{{ route('home') }}">{{ __('Panel') }}</a></li>
                        <li><a href="user={{ Auth::user()->id }}">{{ __('Profil') }}</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Wyloguj') }}</a></li>
<<<<<<< HEAD
                        <li><img src="{{ Auth::user()->avatar }}" class="rounded float-right" width="50px" height="50px"></li>
=======
>>>>>>> 6482298349b823b795641b0be72eab2642f0e4d0
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </nav>

        </div>
    </div>

    <main class="py-4">
                @yield('content')
            </main>

    <?php
        $player = new Player();
    ?>

</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 6482298349b823b795641b0be72eab2642f0e4d0
